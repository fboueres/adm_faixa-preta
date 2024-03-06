import 'jquery-mask-plugin';

$('input[name="student[cpf]"]').mask('000.000.000-00')
$('input[name="guardians[0][cpf]"]').mask('000.000.000-00')
$('input[name="guardians[1][cpf]"]').mask('000.000.000-00')
$('input[name="student[phone_number]"]').mask('(00) 0 0000-0000')
$('input[name="address[cep]"]').mask('00000-000')