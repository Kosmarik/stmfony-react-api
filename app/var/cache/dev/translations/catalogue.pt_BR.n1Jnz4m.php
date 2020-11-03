<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('pt_BR', array (
  'validators' => 
  array (
    'This form should not contain extra fields.' => 'Este formulário não deve conter campos adicionais.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'O arquivo enviado é muito grande. Por favor, tente enviar um arquivo menor.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'O token CSRF é inválido. Por favor, tente reenviar o formulário.',
    'This value is not a valid HTML5 color.' => 'Este valor não é uma cor HTML5 válida.',
    'Please enter a valid birthdate.' => 'Por favor, informe uma data de nascimento válida.',
    'The selected choice is invalid.' => 'A escolha selecionada é inválida.',
    'The collection is invalid.' => 'A coleção é inválida.',
    'Please select a valid color.' => 'Por favor, selecione uma cor válida.',
    'Please select a valid country.' => 'Por favor, selecione um país válido.',
    'Please select a valid currency.' => 'Por favor, selecione uma moeda válida.',
    'Please choose a valid date interval.' => 'Por favor, escolha um intervalo de datas válido.',
    'Please enter a valid date and time.' => 'Por favor, informe uma data e horário válidos.',
    'Please enter a valid date.' => 'Por favor, informe uma data válida.',
    'Please select a valid file.' => 'Por favor, selecione um arquivo válido.',
    'The hidden field is invalid.' => 'O campo oculto é inválido.',
    'Please enter an integer.' => 'Por favor, informe um número inteiro.',
    'Please select a valid language.' => 'Por favor, selecione um idioma válido.',
    'Please select a valid locale.' => 'Por favor, selecione uma configuração de local válida.',
    'Please enter a valid money amount.' => 'Por favor, informe um valor monetário válido.',
    'Please enter a number.' => 'Por favor, informe um número.',
    'The password is invalid.' => 'A senha é inválida.',
    'Please enter a percentage value.' => 'Por favor, informe um valor percentual.',
    'The values do not match.' => 'Os valores não conferem.',
    'Please enter a valid time.' => 'Por favor, informe um horário válido.',
    'Please select a valid timezone.' => 'Por favor, selecione um fuso horário válido.',
    'Please enter a valid URL.' => 'Por favor, informe uma URL válida.',
    'Please enter a valid search term.' => 'Por favor, informe um termo de busca válido.',
    'Please provide a valid phone number.' => 'Por favor, informe um telefone válido.',
    'The checkbox has an invalid value.' => 'A caixa de seleção possui um valor inválido.',
    'Please enter a valid email address.' => 'Por favor, informe um endereço de e-mail válido.',
    'Please select a valid option.' => 'Por favor, selecione uma opção válida.',
    'Please select a valid range.' => 'Por favor, selecione um intervalo válido.',
    'Please enter a valid week.' => 'Por favor, informe uma semana válida.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Uma exceção ocorreu durante a autenticação.',
    'Authentication credentials could not be found.' => 'As credenciais de autenticação não foram encontradas.',
    'Authentication request could not be processed due to a system problem.' => 'A solicitação de autenticação não pôde ser processada devido a um problema no sistema.',
    'Invalid credentials.' => 'Credenciais inválidas.',
    'Cookie has already been used by someone else.' => 'Este cookie já foi usado por outra pessoa.',
    'Not privileged to request the resource.' => 'Sem privilégio para solicitar o recurso.',
    'Invalid CSRF token.' => 'Token CSRF inválido.',
    'No authentication provider found to support the authentication token.' => 'Nenhum provedor de autenticação encontrado para suportar o token de autenticação.',
    'No session available, it either timed out or cookies are not enabled.' => 'Nenhuma sessão disponível, ela expirou ou os cookies não estão habilitados.',
    'No token could be found.' => 'Nenhum token foi encontrado.',
    'Username could not be found.' => 'Nome de usuário não encontrado.',
    'Account has expired.' => 'A conta está expirada.',
    'Credentials have expired.' => 'As credenciais estão expiradas.',
    'Account is disabled.' => 'Conta desativada.',
    'Account is locked.' => 'A conta está travada.',
    'Too many failed login attempts, please try again later.' => 'Muitas tentativas de login malsucedidas, tente novamente mais tarde.',
    'Invalid or expired login link.' => 'Link de login inválido ou expirado.',
  ),
  'EasyAdminBundle' => 
  array (
    'page_title.dashboard' => 'Painel de Controle',
    'page_title.detail' => '%entity_label_singular% <small>(#%entity_short_id%)</small>',
    'page_title.edit' => 'Editar %entity_label_singular% <small>(#%entity_short_id%)</small>',
    'page_title.index' => '%entity_label_plural%',
    'page_title.new' => 'Adicionar %entity_label_singular%',
    'page_title.exception' => 'Erro|Erros',
    'datagrid.hidden_results' => 'Alguns resultados não podem ser exibidos porque você não tem permissão suficiente',
    'datagrid.no_results' => 'Nenhum resultado encontrado.',
    'paginator.first' => 'Primeira',
    'paginator.previous' => 'Anterior',
    'paginator.next' => 'Próxima',
    'paginator.last' => 'Última',
    'paginator.counter' => '<strong>%start%</strong> - <strong>%end%</strong> de <strong>%results%</strong>',
    'paginator.results' => '{0} Sem resultados|{1} <strong>1</strong> resultado|]1,Inf] <strong>%count%</strong> resultados',
    'label.true' => 'Sim',
    'label.false' => 'Não',
    'label.empty' => 'Vazio',
    'label.null' => 'Null',
    'label.nullable_field' => 'Deixar vazio',
    'label.object' => 'Objeto PHP',
    'label.inaccessible' => 'Inacessível',
    'label.inaccessible.explanation' => 'Não existe um método getter para esse campo ou a propriedade não é pública',
    'label.form.empty_value' => 'Nenhum',
    'field.code_editor.view_code' => 'Visualizar código',
    'field.text_editor.view_content' => 'Visualizar conteúdo',
    'action.entity_actions' => 'Ações',
    'action.new' => 'Adicionar %entity_label_singular%',
    'action.search' => 'Pesquisar',
    'action.detail' => 'Exibir',
    'action.edit' => 'Editar',
    'action.delete' => 'Excluir',
    'action.cancel' => 'Cancelar',
    'action.index' => 'Voltar para a lista',
    'action.deselect' => 'Remover seleção',
    'action.add_new_item' => 'Adicionar um novo item',
    'action.remove_item' => 'Remover o item',
    'action.choose_file' => 'Escolher arquivo',
    'action.close' => 'Fechar',
    'action.create' => 'Criar',
    'action.create_and_add_another' => 'Criar e adicionar outro',
    'action.create_and_continue' => 'Criar e continuar editando',
    'action.save' => 'Salvar alterações',
    'action.save_and_continue' => 'Salvar e continuar editando',
    'batch_action_modal.title' => 'Você realmente deseja alterar os itens selecionados?',
    'batch_action_modal.content' => 'Esta operação é irreversível.',
    'batch_action_modal.action' => 'Continuar',
    'delete_modal.title' => 'Você realmente deseja excluir esse item?',
    'delete_modal.content' => 'Não há como desfazer essa operação.',
    'filter.title' => 'Filtros',
    'filter.button.clear' => 'Limpar',
    'filter.button.apply' => 'Aplicar',
    'filter.label.is_equal_to' => 'é igual a',
    'filter.label.is_not_equal_to' => 'é diferente de',
    'filter.label.is_greater_than' => 'é maior que',
    'filter.label.is_greater_than_or_equal_to' => 'é maior ou igual a',
    'filter.label.is_less_than' => 'é menor que',
    'filter.label.is_less_than_or_equal_to' => 'é menor ou igual a',
    'filter.label.is_between' => 'entre',
    'filter.label.contains' => 'contém',
    'filter.label.not_contains' => 'não contém',
    'filter.label.starts_with' => 'começa com',
    'filter.label.ends_with' => 'termina com',
    'filter.label.exactly' => 'é igual a',
    'filter.label.not_exactly' => 'é diferente de',
    'filter.label.is_same' => 'é igual a',
    'filter.label.is_not_same' => 'é diferente de',
    'filter.label.is_after' => 'depois de',
    'filter.label.is_after_or_same' => 'depois ou igual a',
    'filter.label.is_before' => 'antes de',
    'filter.label.is_before_or_same' => 'antes ou igual a',
    'form.are_you_sure' => 'Você não salvou as alterações feitas nesse formulário.',
    'form.tab.error_badge_title' => 'Uma entrada válida|%count% entradas inválidas',
    'form.slug.confirm_text' => 'Ao alterar o slug, você poderá quebrar links em outras páginas.',
    'user.logged_in_as' => 'Logado como',
    'user.unnamed' => 'Usuário sem nome',
    'user.anonymous' => 'Usuário anônimo',
    'user.sign_out' => 'Sair',
    'user.exit_impersonation' => 'Sair da personificação',
    'login_page.username' => 'Usuário',
    'login_page.password' => 'Senha',
    'login_page.sign_in' => 'Entrar',
    'exception.entity_not_found' => 'Este item não está mais disponível.',
    'exception.entity_remove' => 'Esse item não pode ser excluído porque outros itens dependem dele.',
    'exception.forbidden_action' => 'A ação requisitada não pode ser executada nesse item.',
    'exception.insufficient_entity_permission' => 'Você não possui permissão para acessar este item.',
  ),
));

$cataloguePt = new MessageCatalogue('pt', array (
  'validators' => 
  array (
    'This form should not contain extra fields.' => 'Este formulário não deveria conter campos extra.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'O arquivo enviado é muito grande. Por favor, tente enviar um ficheiro mais pequeno.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'O token CSRF é inválido. Por favor submeta o formulário novamente.',
  ),
  'EasyAdminBundle' => 
  array (
    'page_title.detail' => '%entity_label_singular% <small>(#%entity_short_id%)</small>',
    'page_title.edit' => 'Editar %entity_label_singular% <small>(#%entity_short_id%)</small>',
    'page_title.index' => '%entity_label_plural%',
    'page_title.new' => 'Adicionar %entity_label_singular%',
    'page_title.exception' => 'Erro|Erros',
    'datagrid.no_results' => 'Nenhum resultado encontrado.',
    'paginator.first' => 'Primeira',
    'paginator.previous' => 'Anterior',
    'paginator.next' => 'Próxima',
    'paginator.last' => 'Última',
    'paginator.counter' => '<strong>%start%</strong> - <strong>%end%</strong> de <strong>%results%</strong>',
    'paginator.results' => '{0} Sem resultados|{1} <strong>1</strong> resultado|]1,Inf] <strong>%count%</strong> resultados',
    'label.true' => 'Sim',
    'label.false' => 'Não',
    'label.empty' => 'Vazio',
    'label.null' => 'Null',
    'label.nullable_field' => 'Deixar vazio',
    'label.object' => 'Objeto PHP',
    'label.inaccessible' => 'Inacessível',
    'label.inaccessible.explanation' => 'Não existe um método getter para esse campo ou a propriedade não é pública',
    'label.form.empty_value' => 'Nenhum',
    'action.entity_actions' => 'Ações',
    'action.new' => 'Adicionar %entity_label_singular%',
    'action.search' => 'Pesquisar',
    'action.detail' => 'Exibir',
    'action.edit' => 'Editar',
    'action.delete' => 'Excluir',
    'action.cancel' => 'Cancelar',
    'action.index' => 'Voltar para a lista',
    'action.deselect' => 'Remover seleccção',
    'action.add_new_item' => 'Adicionar um novo item',
    'action.remove_item' => 'Remover o item',
    'action.choose_file' => 'Escolher ficheiro',
    'delete_modal.title' => 'Você realmente deseja excluir esse item?',
    'delete_modal.content' => 'Não há como desfazer essa operação.',
    'filter.title' => 'Filtros',
    'filter.button.clear' => 'Limpar',
    'filter.button.apply' => 'Aplicar',
    'filter.label.is_equal_to' => 'é igual a',
    'filter.label.is_not_equal_to' => 'é diferente de',
    'filter.label.is_greater_than' => 'é maior que',
    'filter.label.is_greater_than_or_equal_to' => 'é maior ou igual a',
    'filter.label.is_less_than' => 'é menor que',
    'filter.label.is_less_than_or_equal_to' => 'é menor ou igual a',
    'filter.label.is_between' => 'entre',
    'filter.label.contains' => 'contém',
    'filter.label.not_contains' => 'não contém',
    'filter.label.starts_with' => 'começa por',
    'filter.label.ends_with' => 'acaba em',
    'filter.label.exactly' => 'é igual a',
    'filter.label.not_exactly' => 'é diferente de',
    'filter.label.is_same' => 'é igual a',
    'filter.label.is_not_same' => 'é diferente de',
    'filter.label.is_after' => 'depois de',
    'filter.label.is_after_or_same' => 'depois ou igual a',
    'filter.label.is_before' => 'antes de',
    'filter.label.is_before_or_same' => 'antes ou igual a',
    'form.are_you_sure' => 'Você não salvou as alterações feitas nesse formulário.',
    'user.logged_in_as' => 'Logado como',
    'user.unnamed' => 'Usuário sem nome',
    'user.anonymous' => 'Usuário anônimo',
    'user.sign_out' => 'Sair',
    'login_page.username' => 'Usuário',
    'login_page.password' => 'Senha',
    'login_page.sign_in' => 'Entrar',
    'exception.entity_not_found' => 'Este item não está mais disponível.',
    'exception.entity_remove' => 'Esse item não pode ser excluído porque outros itens dependem dele.',
    'exception.forbidden_action' => 'A ação requisitada não pode ser executada nesse item.',
  ),
));
$catalogue->addFallbackCatalogue($cataloguePt);
$catalogueEn = new MessageCatalogue('en', array (
  'validators' => 
  array (
    'This form should not contain extra fields.' => 'This form should not contain extra fields.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'The uploaded file was too large. Please try to upload a smaller file.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'The CSRF token is invalid. Please try to resubmit the form.',
    'This value is not a valid HTML5 color.' => 'This value is not a valid HTML5 color.',
    'Please enter a valid birthdate.' => 'Please enter a valid birthdate.',
    'The selected choice is invalid.' => 'The selected choice is invalid.',
    'The collection is invalid.' => 'The collection is invalid.',
    'Please select a valid color.' => 'Please select a valid color.',
    'Please select a valid country.' => 'Please select a valid country.',
    'Please select a valid currency.' => 'Please select a valid currency.',
    'Please choose a valid date interval.' => 'Please choose a valid date interval.',
    'Please enter a valid date and time.' => 'Please enter a valid date and time.',
    'Please enter a valid date.' => 'Please enter a valid date.',
    'Please select a valid file.' => 'Please select a valid file.',
    'The hidden field is invalid.' => 'The hidden field is invalid.',
    'Please enter an integer.' => 'Please enter an integer.',
    'Please select a valid language.' => 'Please select a valid language.',
    'Please select a valid locale.' => 'Please select a valid locale.',
    'Please enter a valid money amount.' => 'Please enter a valid money amount.',
    'Please enter a number.' => 'Please enter a number.',
    'The password is invalid.' => 'The password is invalid.',
    'Please enter a percentage value.' => 'Please enter a percentage value.',
    'The values do not match.' => 'The values do not match.',
    'Please enter a valid time.' => 'Please enter a valid time.',
    'Please select a valid timezone.' => 'Please select a valid timezone.',
    'Please enter a valid URL.' => 'Please enter a valid URL.',
    'Please enter a valid search term.' => 'Please enter a valid search term.',
    'Please provide a valid phone number.' => 'Please provide a valid phone number.',
    'The checkbox has an invalid value.' => 'The checkbox has an invalid value.',
    'Please enter a valid email address.' => 'Please enter a valid email address.',
    'Please select a valid option.' => 'Please select a valid option.',
    'Please select a valid range.' => 'Please select a valid range.',
    'Please enter a valid week.' => 'Please enter a valid week.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'An authentication exception occurred.',
    'Authentication credentials could not be found.' => 'Authentication credentials could not be found.',
    'Authentication request could not be processed due to a system problem.' => 'Authentication request could not be processed due to a system problem.',
    'Invalid credentials.' => 'Invalid credentials.',
    'Cookie has already been used by someone else.' => 'Cookie has already been used by someone else.',
    'Not privileged to request the resource.' => 'Not privileged to request the resource.',
    'Invalid CSRF token.' => 'Invalid CSRF token.',
    'No authentication provider found to support the authentication token.' => 'No authentication provider found to support the authentication token.',
    'No session available, it either timed out or cookies are not enabled.' => 'No session available, it either timed out or cookies are not enabled.',
    'No token could be found.' => 'No token could be found.',
    'Username could not be found.' => 'Username could not be found.',
    'Account has expired.' => 'Account has expired.',
    'Credentials have expired.' => 'Credentials have expired.',
    'Account is disabled.' => 'Account is disabled.',
    'Account is locked.' => 'Account is locked.',
    'Too many failed login attempts, please try again later.' => 'Too many failed login attempts, please try again later.',
    'Invalid or expired login link.' => 'Invalid or expired login link.',
  ),
  'EasyAdminBundle' => 
  array (
    'page_title.dashboard' => 'Dashboard',
    'page_title.detail' => '%entity_label_singular% <small>(#%entity_short_id%)</small>',
    'page_title.edit' => 'Edit %entity_label_singular% <small>(#%entity_short_id%)</small>',
    'page_title.index' => '%entity_label_plural%',
    'page_title.new' => 'Create %entity_label_singular%',
    'page_title.exception' => 'Error|Errors',
    'datagrid.hidden_results' => 'Some results can\'t be displayed because you don\'t have enough permissions',
    'datagrid.no_results' => 'No results found.',
    'paginator.first' => 'First',
    'paginator.previous' => 'Previous',
    'paginator.next' => 'Next',
    'paginator.last' => 'Last',
    'paginator.counter' => '<strong>%start%</strong> - <strong>%end%</strong> of <strong>%results%</strong>',
    'paginator.results' => '{0} No results|{1} <strong>1</strong> result|]1,Inf] <strong>%count%</strong> results',
    'label.true' => 'Yes',
    'label.false' => 'No',
    'label.empty' => 'Empty',
    'label.null' => 'Null',
    'label.nullable_field' => 'Leave empty',
    'label.object' => 'PHP Object',
    'label.inaccessible' => 'Inaccessible',
    'label.inaccessible.explanation' => 'Getter method does not exist for this field or the field is not public',
    'label.form.empty_value' => 'None',
    'field.code_editor.view_code' => 'View code',
    'field.text_editor.view_content' => 'View content',
    'action.entity_actions' => 'Actions',
    'action.new' => 'Add %entity_label_singular%',
    'action.search' => 'Search',
    'action.detail' => 'Show',
    'action.edit' => 'Edit',
    'action.delete' => 'Delete',
    'action.cancel' => 'Cancel',
    'action.index' => 'Back to listing',
    'action.deselect' => 'Deselect',
    'action.add_new_item' => 'Add a new item',
    'action.remove_item' => 'Remove the item',
    'action.choose_file' => 'Choose file',
    'action.close' => 'Close',
    'action.create' => 'Create',
    'action.create_and_add_another' => 'Create and add another',
    'action.create_and_continue' => 'Create and continue editing',
    'action.save' => 'Save changes',
    'action.save_and_continue' => 'Save and continue editing',
    'batch_action_modal.title' => 'Do you really want to alter the selected items?',
    'batch_action_modal.content' => 'There is no undo for this operation.',
    'batch_action_modal.action' => 'Proceed',
    'delete_modal.title' => 'Do you really want to delete this item?',
    'delete_modal.content' => 'There is no undo for this operation.',
    'filter.title' => 'Filters',
    'filter.button.clear' => 'Clear',
    'filter.button.apply' => 'Apply',
    'filter.label.is_equal_to' => 'is equal to',
    'filter.label.is_not_equal_to' => 'is not equal to',
    'filter.label.is_greater_than' => 'is greater than',
    'filter.label.is_greater_than_or_equal_to' => 'is greater than or equal to',
    'filter.label.is_less_than' => 'is less than',
    'filter.label.is_less_than_or_equal_to' => 'is less than or equal to',
    'filter.label.is_between' => 'is between',
    'filter.label.contains' => 'contains',
    'filter.label.not_contains' => 'doesn\'t contain',
    'filter.label.starts_with' => 'starts with',
    'filter.label.ends_with' => 'ends with',
    'filter.label.exactly' => 'exactly',
    'filter.label.not_exactly' => 'not exactly',
    'filter.label.is_same' => 'is same',
    'filter.label.is_not_same' => 'is not same',
    'filter.label.is_after' => 'is after',
    'filter.label.is_after_or_same' => 'is after or same',
    'filter.label.is_before' => 'is before',
    'filter.label.is_before_or_same' => 'is before or same',
    'form.are_you_sure' => 'You haven\'t saved the changes made on this form.',
    'form.tab.error_badge_title' => 'One invalid input|%count% invalid inputs',
    'form.slug.confirm_text' => 'If you change the slug, you can break links on other pages.',
    'user.logged_in_as' => 'Logged in as',
    'user.unnamed' => 'Unnamed User',
    'user.anonymous' => 'Anonymous User',
    'user.sign_out' => 'Sign out',
    'user.exit_impersonation' => 'Exit impersonation',
    'login_page.username' => 'Username',
    'login_page.password' => 'Password',
    'login_page.sign_in' => 'Sign in',
    'exception.entity_not_found' => 'This item is no longer available.',
    'exception.entity_remove' => 'This item can\'t be deleted because other items depend on it.',
    'exception.forbidden_action' => 'The requested action can\'t be performed on this item.',
    'exception.insufficient_entity_permission' => 'You don\'t have permission to access this item.',
  ),
));
$cataloguePt->addFallbackCatalogue($catalogueEn);

return $catalogue;
