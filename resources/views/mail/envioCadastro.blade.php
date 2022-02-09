@component('mail::message')

# Candidatou-se para: {{$vaga}}
----------------------------------------------------
# Dados do candidato.
### Nome completo: {{$nome}}
### Email: {{$email}}
### Telefone: {{$telefone}}
### Preferência de contato: {{$preferencia_contato}}
### Opção de trabalho: {{$preferencia_trabalho}}

@endcomponent