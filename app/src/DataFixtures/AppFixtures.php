<?php

namespace App\DataFixtures;

use App\Entity\BlogPost;
use App\Entity\Comment;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{
    CONST USERS = [
        [
            "username" => "Lait",
            "email" => "lait@test.test",
            "name" => "Lait",
            "password" => "Password123",
            "roles" => [User::ROLE_SUPERADMIN]
        ],
        [
            "username" => "Dmitrij",
            "email" => "dmitrij@test.test",
            "name" => "Dmitrij",
            "password" => "Password123",
            "roles" => [User::ROLE_ADMIN]
        ],
        [
            "username" => "Pushkin",
            "email" => "pushkin@test.test",
            "name" => "Pushkin",
            "password" => "Password123",
            "roles" => [User::ROLE_WRITER]
        ],
        [
            "username" => "Tolstoi",
            "email" => "tolstoi@test.test",
            "name" => "Tolstoi",
            "password" => "Password123",
            "roles" => [User::ROLE_WRITER]
        ],
        [
            "username" => "Lermantov",
            "email" => "lermantov@test.test",
            "name" => "Lermantov",
            "password" => "Password123",
            "roles" => [User::ROLE_COMMENTATOR]
        ],
        [
            "username" => "Han solo",
            "email" => "han.solo@test.test",
            "name" => "Han solo",
            "password" => "Password123",
            "roles" => [User::ROLE_EDITOR]
        ],
    ];

    /**
     * @var UserPasswordEncoderInterface
     */
    private $passwordEncoder;

    /**
     * @var \Faker\Factory
     */
    private $faker;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
        $this->faker = \Faker\Factory::create();
    }

    public function load(ObjectManager $manager)
    {
        $this->loadUsers($manager);
        $this->loadBlogPosts($manager);
        $this->loadComments($manager);
    }

    public function loadBlogPosts(ObjectManager $manager)
    {
        for ($i = 0; $i < 100; $i++) {
            $blogPost = new BlogPost();
            $blogPost->setTitle($this->faker->realText(30));
            $blogPost->setPublished($this->faker->dateTimeThisYear);
            $blogPost->setContent($this->faker->realText());

            $authorReference = $this->getRandomUserReference($blogPost);

            $blogPost->setAuthor($authorReference);
            $blogPost->setSlug($this->faker->slug);

            $this->setReference("blog_post_$i", $blogPost);

            $manager->persist($blogPost);
        }

        $manager->flush();
    }

    public function loadComments(ObjectManager $manager)
    {
        for ($i = 0; $i < 100; $i++) {
            for ($j = 0; $j < rand(1, 10); $j++) {
                $comment = new Comment();
                $comment->setContent($this->faker->realText());
                $comment->setPublished($this->faker->dateTimeThisYear);

                $authorReference = $this->getRandomUserReference($comment);

                $comment->setAuthor($authorReference);
                $comment->setBlogPost($this->getReference("blog_post_$i"));

                $manager->persist($comment);
            }
        }

        $manager->flush();
    }

    public function loadUsers(ObjectManager $manager)
    {
        foreach (self::USERS as $userFixture) {
            $user = new User();
            $user->setUsername($userFixture['username']);
            $user->setEmail($userFixture['email']);
            $user->setName($userFixture['name']);

            $user->setPassword($this->passwordEncoder->encodePassword(
                $user,
                $userFixture['password']
            ));
            $user->setRoles($userFixture['roles']);

            $this->addReference('user_' . $userFixture['username'], $user);

            $manager->persist($user);
        }

        $manager->flush();
    }

    protected function getRandomUserReference($entity): User
    {
        $randomUser = self::USERS[rand(0, 5)];

        if ($entity instanceof BlogPost && !count(
            array_intersect(
                $randomUser['roles'],
                [
                    User::ROLE_SUPERADMIN,
                    User::ROLE_ADMIN,
                    User::ROLE_WRITER
                ])
            )) {
            return $this->getRandomUserReference($entity);
        }

        if ($entity instanceof Comment && !count(
                array_intersect(
                    $randomUser['roles'],
                    [
                        User::ROLE_SUPERADMIN,
                        User::ROLE_ADMIN,
                        User::ROLE_WRITER,
                        User::ROLE_COMMENTATOR
                    ])
            )) {
            return $this->getRandomUserReference($entity);
        }

        return $this->getReference('user_' . $randomUser['username']);
    }
}
