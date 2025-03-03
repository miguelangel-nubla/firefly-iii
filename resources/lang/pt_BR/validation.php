<?php

/**
 * validation.php
 * Copyright (c) 2019 james@firefly-iii.org
 *
 * This file is part of Firefly III (https://github.com/firefly-iii).
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

/*
 * PLEASE DO NOT EDIT THIS FILE DIRECTLY.
 * YOUR CHANGES WILL BE OVERWRITTEN!
 * YOUR PR WITH CHANGES TO THIS FILE WILL BE REJECTED!
 *
 * GO TO CROWDIN TO FIX OR CHANGE TRANSLATIONS!
 *
 * https://crowdin.com/project/firefly-iii
 *
 */


declare(strict_types=1);

return [
    'missing_where'                  => 'O array está sem a cláusula "where"',
    'missing_update'                 => 'O array está sem a cláusula "update"',
    'invalid_where_key'              => 'O JSON contém uma chave inválida para a cláusula "where"',
    'invalid_update_key'             => 'O JSON contém uma chave inválida para a cláusula "update"',
    'invalid_query_data'             => 'Há dados inválidos no campo %s:%s da sua consulta.',
    'invalid_query_account_type'     => 'Sua consulta contém contas de diferentes tipos, o que não é permitido.',
    'invalid_query_currency'         => 'Sua consulta contém contas que têm diferentes configurações de moeda, o que não é permitido.',
    'iban'                           => 'Este não é um válido IBAN.',
    'zero_or_more'                   => 'O valor não pode ser negativo.',
    'date_or_time'                   => 'O valor deve ser uma data válida (ISO 8601).',
    'source_equals_destination'      => 'A conta de origem é igual à conta de destino.',
    'unique_account_number_for_user' => 'Parece que este número de conta já está em uso.',
    'unique_iban_for_user'           => 'Parece que este IBAN já está em uso.',
    'deleted_user'                   => 'Devido a restrições de segurança, você não pode registrar usando este endereço de e-mail.',
    'rule_trigger_value'             => 'Este valor é inválido para o disparo selecionado.',
    'rule_action_value'              => 'Este valor é inválido para a ação selecionada.',
    'file_already_attached'          => 'Arquivo ":name" carregado já está anexado para este objeto.',
    'file_attached'                  => 'Arquivo carregado com sucesso ":name".',
    'must_exist'                     => 'O ID no campo :attribute não existe no banco de dados.',
    'all_accounts_equal'             => 'Todas as contas neste campo devem ser iguais.',
    'group_title_mandatory'          => 'Um título de grupo é obrigatório quando existe mais de uma transação.',
    'transaction_types_equal'        => 'Todas as divisões devem ser do mesmo tipo.',
    'invalid_transaction_type'       => 'Tipo de transação inválido.',
    'invalid_selection'              => 'Sua seleção é inválida.',
    'belongs_user'                   => 'This value is linked to an object that does not belong to you.',
    'belongs_user_or_user_group'     => 'This value is linked to an object that does not belong to your current financial administration.',
    'at_least_one_transaction'       => 'Precisa de ao menos uma transação.',
    'recurring_transaction_id'       => 'Precisa de ao menos uma transação.',
    'need_id_to_match'               => 'Você precisa enviar esta entrada com um ID para a API poder identificá-la.',
    'too_many_unmatched'             => 'Muitas transações submetidas não podem ser correspondidas a suas respectivas entradas de banco de dados. Certifique-se de que as entradas existentes possuem um ID válido.',
    'id_does_not_match'              => 'O ID #:id enviado não corresponde ao ID esperado. Certifique-se de que corresponda ou omita o campo.',
    'at_least_one_repetition'        => 'Precisa de ao menos uma repetição.',
    'require_repeat_until'           => 'É necessário ou um número de repetições ou uma data de término (repetir até). Não ambos.',
    'require_currency_info'          => 'O conteúdo deste campo é inválido sem informações de moeda.',
    'not_transfer_account'           => 'Esta não é uma conta que possa ser usada para transferências.',
    'require_currency_amount'        => 'O conteúdo deste campo é inválido sem a informação de moeda estrangeira.',
    'require_foreign_currency'       => 'Este campo deve ser um número',
    'require_foreign_dest'           => 'Este valor de campo deve corresponder à moeda da conta de destino.',
    'require_foreign_src'            => 'Este valor de campo deve corresponder à moeda da conta de origem.',
    'equal_description'              => 'A descrição da transação não pode ser igual à descrição global.',
    'file_invalid_mime'              => 'Arquivo ":name" é do tipo ":mime" que não é aceito como um novo upload.',
    'file_too_large'                 => 'Arquivo ":name" é muito grande.',
    'belongs_to_user'                => 'O valor de :attribute é desconhecido.',
    'accepted'                       => 'O campo :attribute deve ser aceito.',
    'bic'                            => 'Este não é um BIC válido.',
    'at_least_one_trigger'           => 'A regra deve ter pelo menos um gatilho.',
    'at_least_one_active_trigger'    => 'A regra deve ter pelo menos um acionador ativo.',
    'at_least_one_action'            => 'A regra deve ter pelo menos uma ação.',
    'at_least_one_active_action'     => 'A regra deve ter pelo menos uma ação ativa.',
    'base64'                         => 'Isto não é válido na codificação de dados base64.',
    'model_id_invalid'               => 'A identificação especificada parece inválida para este modelo.',
    'less'                           => ':attribute deve ser menor do que 10.000.000',
    'active_url'                     => 'O campo :attribute não contém um URL válido.',
    'after'                          => 'O campo :attribute deverá conter uma data posterior a :date.',
    'date_after'                     => 'A data de início deve ser anterior à data de término.',
    'alpha'                          => 'O campo :attribute deverá conter apenas letras.',
    'alpha_dash'                     => 'O campo :attribute deverá conter apenas letras, números e traços.',
    'alpha_num'                      => 'O campo :attribute deverá conter apenas letras e números .',
    'array'                          => 'O campo :attribute precisa ser um conjunto.',
    'unique_for_user'                => 'Já existe uma entrada com este :attribute.',
    'before'                         => 'O campo :attribute deverá conter uma data anterior a :date.',
    'unique_object_for_user'         => 'Este nome já esta em uso.',
    'unique_account_for_user'        => 'Este nome de conta já está sendo usado.',

/*
 * PLEASE DO NOT EDIT THIS FILE DIRECTLY.
 * YOUR CHANGES WILL BE OVERWRITTEN!
 * YOUR PR WITH CHANGES TO THIS FILE WILL BE REJECTED!
 *
 * GO TO CROWDIN TO FIX OR CHANGE TRANSLATIONS!
 *
 * https://crowdin.com/project/firefly-iii
 *
 */


    'between.numeric'            => 'O campo :attribute deverá ter um valor entre :min - :max.',
    'between.file'               => 'O campo :attribute deverá ter um tamanho entre :min - :max kilobytes.',
    'between.string'             => 'O campo :attribute deverá conter entre :min - :max caracteres.',
    'between.array'              => 'O campo :attribute precisar ter entre :min - :max itens.',
    'boolean'                    => 'O campo :attribute deverá ter o valor verdadeiro ou falso.',
    'confirmed'                  => 'A confirmação para o campo :attribute não coincide.',
    'date'                       => 'O campo :attribute não contém uma data válida.',
    'date_format'                => 'A data indicada para o campo :attribute não respeita o formato :format.',
    'different'                  => 'Os campos :attribute e :other deverão conter valores diferentes.',
    'digits'                     => 'O campo :attribute deverá conter :digits dígitos.',
    'digits_between'             => 'O campo :attribute deverá conter entre :min a :max dígitos.',
    'email'                      => 'O campo :attribute não contém um endereço de email válido.',
    'filled'                     => 'O campo :attribute é obrigatório.',
    'exists'                     => 'O valor selecionado para o campo :attribute é inválido.',
    'image'                      => 'O campo :attribute deverá conter uma imagem.',
    'in'                         => 'O campo :attribute não contém um valor válido.',
    'integer'                    => 'O campo :attribute deverá conter um número inteiro.',
    'ip'                         => 'O campo :attribute deverá conter um IP válido.',
    'json'                       => 'O campo :attribute deverá conter uma string JSON válida.',
    'max.numeric'                => 'O campo :attribute não deverá conter um valor superior a :max.',
    'max.file'                   => 'O campo :attribute não deverá ter um tamanho superior a :max kilobytes.',
    'max.string'                 => 'O campo :attribute não deverá conter mais de :max caracteres.',
    'max.array'                  => 'O campo :attribute deve ter no máximo :max itens.',
    'mimes'                      => 'O campo :attribute deverá conter um arquivo do tipo: :values.',
    'min.numeric'                => 'O campo :attribute deverá ter um valor superior ou igual a :min.',
    'lte.numeric'                => 'O :attribute deve ser menor ou igual a :value.',
    'min.file'                   => 'O campo :attribute deverá ter no mínimo :min kilobytes.',
    'min.string'                 => 'O campo :attribute deverá conter no mínimo :min caracteres.',
    'min.array'                  => 'O campo :attribute deve ter no mínimo :min itens.',
    'not_in'                     => 'O campo :attribute contém um valor inválido.',
    'numeric'                    => 'O campo :attribute deverá conter um valor numérico.',
    'numeric_native'             => 'O montante nativo deve ser um número.',
    'numeric_destination'        => 'O montante de destino deve ser um número.',
    'numeric_source'             => 'O montante original deve ser um número.',
    'regex'                      => 'O formato do valor para o campo :attribute é inválido.',
    'required'                   => 'O campo :attribute é obrigatório.',
    'required_if'                => 'O campo :attribute é obrigatório quando o valor do campo :other é igual a :value.',
    'required_unless'            => 'O campo :attribute é obrigatório a menos que :other esteja presente em :values.',
    'required_with'              => 'O campo :attribute é obrigatório quando :values está presente.',
    'required_with_all'          => 'O campo :attribute é obrigatório quando um dos :values está presente.',
    'required_without'           => 'O campo :attribute é obrigatório quanto :values não está presente.',
    'required_without_all'       => 'O campo :attribute é obrigatório quando nenhum dos :values está presente.',
    'same'                       => 'Os campos :attribute e :other deverão conter valores iguais.',
    'size.numeric'               => 'O campo :attribute deverá conter o valor :size.',
    'amount_min_over_max'        => 'O valor mínimo não pode ser maior do que o valor máximo.',
    'size.file'                  => 'O campo :attribute deverá ter o tamanho de :size kilobytes.',
    'size.string'                => 'O campo :attribute deverá conter :size caracteres.',
    'size.array'                 => 'O campo :attribute deve ter :size itens.',
    'unique'                     => 'O valor indicado para o campo :attribute já se encontra utilizado.',
    'string'                     => 'O campo :attribute deve ser uma string.',
    'url'                        => 'O formato do URL indicado para o campo :attribute é inválido.',
    'timezone'                   => 'O campo :attribute deverá ter um fuso horário válido.',
    '2fa_code'                   => 'O campo :attribute é inválido.',
    'dimensions'                 => 'O campo :attribute tem dimensões de imagem inválido.',
    'distinct'                   => 'O campo :attribute tem um valor duplicado.',
    'file'                       => 'O :attribute deve ser um arquivo.',
    'in_array'                   => 'O campo :attribute não existe em :other.',
    'present'                    => 'O campo :attribute deve estar presente.',
    'amount_zero'                => 'O montante total não pode ser zero.',
    'current_target_amount'      => 'O valor atual deve ser menor do que o valor pretendido.',
    'unique_piggy_bank_for_user' => 'O nome do cofrinho deve ser único.',
    'unique_object_group'        => 'O nome do grupo deve ser único',
    'starts_with'                => 'O valor deve começar com :values.',
    'unique_webhook'             => 'Você já tem um webhook com esta combinação de URL, gatilho, resposta e entrega.',
    'unique_existing_webhook'    => 'Você já tem outro webhook com esta combinação de URL, gatilho, resposta e entrega.',
    'same_account_type'          => 'Ambas as contas devem ser do mesmo tipo',
    'same_account_currency'      => 'Ambas as contas devem ter a mesma configuração de moeda',

/*
 * PLEASE DO NOT EDIT THIS FILE DIRECTLY.
 * YOUR CHANGES WILL BE OVERWRITTEN!
 * YOUR PR WITH CHANGES TO THIS FILE WILL BE REJECTED!
 *
 * GO TO CROWDIN TO FIX OR CHANGE TRANSLATIONS!
 *
 * https://crowdin.com/project/firefly-iii
 *
 */


    'secure_password'             => 'Esta não é uma senha segura. Por favor, tente novamente. Para mais informações, visite https://bit.ly/FF3-password-security',
    'valid_recurrence_rep_type'   => 'Tipo de repetição inválido para transações recorrentes.',
    'valid_recurrence_rep_moment' => 'Momento de repetição inválido para esse tipo de repetição.',
    'invalid_account_info'        => 'Informação de conta inválida.',
    'attributes'                  => [
        'email'                   => 'endereço de e-mail',
        'description'             => 'descrição',
        'amount'                  => 'valor',
        'transactions.*.amount'   => 'valor da transação',
        'name'                    => 'nome',
        'piggy_bank_id'           => 'ID do cofrinho',
        'targetamount'            => 'quantidade alvo',
        'opening_balance_date'    => 'data do saldo inicial',
        'opening_balance'         => 'saldo inicial',
        'match'                   => 'coincidente',
        'amount_min'              => 'valor mínimo',
        'amount_max'              => 'valor máximo',
        'title'                   => 'título',
        'tag'                     => 'tag',
        'transaction_description' => 'Descrição da transação',
        'rule-action-value.1'     => 'valor de ação de regra #1',
        'rule-action-value.2'     => 'valor de ação da regra #2',
        'rule-action-value.3'     => 'valor de ação de regra #3',
        'rule-action-value.4'     => 'valor de ação de regra #4',
        'rule-action-value.5'     => 'valor de ação de regra #5',
        'rule-action.1'           => 'regra de ação #1',
        'rule-action.2'           => 'regra de ação #2',
        'rule-action.3'           => 'regra de ação #3',
        'rule-action.4'           => 'regra de ação #4',
        'rule-action.5'           => 'regra de ação #5',
        'rule-trigger-value.1'    => 'valor do disparador da regra #1',
        'rule-trigger-value.2'    => 'valor do disparador da regra #2',
        'rule-trigger-value.3'    => 'valor do disparador da regra #3',
        'rule-trigger-value.4'    => 'valor do disparador da regra #4',
        'rule-trigger-value.5'    => 'valor do disparador da regra #5',
        'rule-trigger.1'          => 'disparador da regra #1',
        'rule-trigger.2'          => 'disparador da regra #2',
        'rule-trigger.3'          => 'disparador da regra #3',
        'rule-trigger.4'          => 'disparador da regra #4',
        'rule-trigger.5'          => 'disparador da regra #5',
    ],

    // validation of accounts:
    'withdrawal_source_need_data' => 'É necessário obter um ID de uma conta de origem válida e/ou um nome de conta de origem válido para continuar.',
    'withdrawal_source_bad_data'  => '[a] Não foi possível encontrar uma conta de origem válida ao procurar por ID ":id" ou nome ":name".',
    'withdrawal_dest_need_data'   => '[a] É necessário obter um ID de conta de destino válido e/ou um nome de conta de destino válido para continuar.',
    'withdrawal_dest_bad_data'    => 'Não foi possível encontrar uma conta de destino válida ao pesquisar por ID ":id" ou nome ":name".',

    'withdrawal_dest_iban_exists' => 'Este IBAN de conta de destino já está em uso por outra conta de ativos ou uma responsabilidade e não pode ser usada como um destino de retirada.',
    'deposit_src_iban_exists'     => 'Este IBAN de conta de origem já está em uso por outra conta de ativos ou uma responsabilidade e não pode ser usada como uma fonte de depósito.',

    'reconciliation_source_bad_data' => 'Não foi possível encontrar uma conta de reconciliação válida ao pesquisar por ID ":id" ou nome ":name".',

    'generic_source_bad_data' => '[e] Não foi possível encontrar uma conta de origem válida ao procurar por ID ":id" ou nome ":name".',

    'deposit_source_need_data' => 'É necessário obter um ID de uma conta de origem válida e/ou um nome de conta de origem válido para continuar.',
    'deposit_source_bad_data'  => '[b] Não foi possível encontrar uma conta de origem válida ao procurar por ID ":id" ou nome ":name".',
    'deposit_dest_need_data'   => '[b] É necessário obter um ID de conta de destino válido e/ou um nome de conta de destino válido para continuar.',
    'deposit_dest_bad_data'    => 'Não foi possível encontrar uma conta de destino válida ao pesquisar por ID ":id" ou nome ":name".',
    'deposit_dest_wrong_type'  => 'A conta de destino enviada não é do tipo certo.',

/*
 * PLEASE DO NOT EDIT THIS FILE DIRECTLY.
 * YOUR CHANGES WILL BE OVERWRITTEN!
 * YOUR PR WITH CHANGES TO THIS FILE WILL BE REJECTED!
 *
 * GO TO CROWDIN TO FIX OR CHANGE TRANSLATIONS!
 *
 * https://crowdin.com/project/firefly-iii
 *
 */


    'transfer_source_need_data' => 'É necessário obter um ID de uma conta de origem válida e/ou um nome de conta de origem válido para continuar.',
    'transfer_source_bad_data'  => '[c] Não foi possível encontrar uma conta de origem válida ao procurar por ID ":id" ou nome ":name".',
    'transfer_dest_need_data'   => '[c] É necessário obter um ID de conta de destino válido e/ou um nome de conta de destino válido para continuar.',
    'transfer_dest_bad_data'    => 'Não foi possível encontrar uma conta de destino válida ao pesquisar por ID ":id" ou nome ":name".',
    'need_id_in_edit'           => 'Cada divisão deve ter transaction_journal_id (ID válido ou 0).',

    'ob_source_need_data'           => 'É necessário obter um ID de uma conta de origem válida e/ou um nome de conta de origem válido para continuar.',
    'lc_source_need_data'           => 'É necessário obter um ID de uma conta de origem válida para continuar.',
    'ob_dest_need_data'             => '[d] É necessário obter um ID de conta de destino válido e/ou um nome de conta de destino válido para continuar.',
    'ob_dest_bad_data'              => 'Não foi possível encontrar uma conta de destino válida ao pesquisar por ID ":id" ou nome ":name".',
    'reconciliation_either_account' => 'Para enviar uma reconciliação, você deve enviar uma conta de origem ou de destino. Não ambos, nem nenhum.',

    'generic_invalid_source'      => 'Você não pode usar esta conta como conta de origem.',
    'generic_invalid_destination' => 'Você não pode usar esta conta como conta de destino.',

    'generic_no_source'      => 'Você deve enviar as informações da conta de origem ou enviar um ID do diário de transação.',
    'generic_no_destination' => 'Você deve enviar as informações da conta de destino ou enviar um ID do diário de transação.',

    'gte.numeric' => ':attribute deve ser maior ou igual a :value.',
    'gt.numeric'  => 'O campo :attribute deve ser maior que :value.',
    'gte.file'    => 'O campo :attribute deve ser maior ou igual a :value kilobytes.',
    'gte.string'  => 'O campo :attribute deve ser maior ou igual a :value caracteres.',
    'gte.array'   => 'O campo :attribute deve ter :value itens ou mais.',

    'amount_required_for_auto_budget' => 'O valor é necessário.',
    'auto_budget_amount_positive'     => 'A quantidade deve ser maior do que zero.',
    'auto_budget_period_mandatory'    => 'O período de orçamento automático é um campo obrigatório.',

    // no access to administration:
    'no_access_user_group'            => 'Você não direitos de acesso suficientes para esta administração.',
];

/*
 * PLEASE DO NOT EDIT THIS FILE DIRECTLY.
 * YOUR CHANGES WILL BE OVERWRITTEN!
 * YOUR PR WITH CHANGES TO THIS FILE WILL BE REJECTED!
 *
 * GO TO CROWDIN TO FIX OR CHANGE TRANSLATIONS!
 *
 * https://crowdin.com/project/firefly-iii
 *
 */
