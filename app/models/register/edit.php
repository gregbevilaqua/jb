<?
    function validate()
    {
        form_validation::add_validation('name', 'required', 'Nome da Empresa');
        form_validation::add_validation('category', 'required', 'Categoria');
        form_validation::add_validation('email', 'required', 'E-mail');
        form_validation::add_validation('email', 'email', 'E-mail válido');
        form_validation::add_validation('address', 'required', 'Endereço');
        form_validation::add_validation('city', 'required', 'Cidade');
        form_validation::add_validation('zip', 'required', 'Cep');
        form_validation::add_validation('phoneno', 'required', 'Telefone');
        
    }
?>