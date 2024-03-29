<?php

return (new PhpCsFixer\Config())
    ->setRules([
        '@PSR12'                                        => true,
        'array_indentation'                             => true,
        'magic_method_casing'                           => true,
        'combine_consecutive_unsets'                    => true,
        'multiline_whitespace_before_semicolons'        => false,
        'single_quote'                                  => true,
        'blank_line_after_namespace'                    => true,
        'blank_line_after_opening_tag'                  => true,
        'declare_equal_normalize'                       => true,
        'function_typehint_space'                       => true,
        'include'                                       => true,
        'lowercase_cast'                                => true,
        'lowercase_keywords'                            => true,
        'magic_constant_casing'                         => true,
        'lowercase_static_reference'                    => true,
        'clean_namespace'                               => true,
        'integer_literal_case'                          => true,
        'lambda_not_used_import'                        => true,
        'linebreak_after_opening_tag'                   => true,
        'method_chaining_indentation'                   => true,
        'multiline_comment_opening_closing'             => true,
        'native_function_type_declaration_casing'       => true,
        'native_function_casing'                        => true,
        'no_binary_string'                              => true,
        'no_multiline_whitespace_around_double_arrow'   => true,
        'no_unused_imports'                             => true,
        'no_whitespace_before_comma_in_array'           => true,
        'no_whitespace_in_blank_line'                   => true,
        'object_operator_without_whitespace'            => true,
        'ternary_operator_spaces'                       => true,
        'trim_array_spaces'                             => true,
        'unary_operator_spaces'                         => true,
        'space_after_semicolon'                         => true,
        'return_type_declaration'                       => true,
        'short_scalar_cast'                             => true,
        'no_blank_lines_after_class_opening'            => true,
        'no_blank_lines_after_phpdoc'                   => true,
        'no_empty_comment'                              => true,
        'no_empty_phpdoc'                               => true,
        'no_leading_import_slash'                       => true,
        'no_leading_namespace_whitespace'               => true,
        'no_multiple_statements_per_line'               => true,
        'no_short_bool_cast'                            => true,
        'no_singleline_whitespace_before_semicolons'    => true,
        'no_space_around_double_colon'                  => true,
        'no_spaces_after_function_name'                 => true,
        'no_trailing_comma_in_list_call'                => true,
        'no_trailing_whitespace'                        => true,
        'no_trailing_whitespace_in_comment'             => true,
        'normalize_index_brace'                         => true,
        'object_operator_without_whitespace'            => true,
        'phpdoc_annotation_without_dot'                 => true,
        'phpdoc_indent'                                 => true,
        'phpdoc_no_access'                              => true,
        'phpdoc_single_line_var_spacing'                => true,
        'phpdoc_summary'                                => true,
        'phpdoc_trim'                                   => true,
        'phpdoc_trim_consecutive_blank_line_separation' => true,
        'single_blank_line_at_eof'                      => true,
        'semicolon_after_instruction'                   => true,
        'simplified_if_return'                          => true,
        'return_assignment'                             => true,
        'single_line_after_imports'                     => true,
        'single_line_throw'                             => true,
        'standardize_increment'                         => true,
        'standardize_not_equals'                        => true,
        'statement_indentation'                         => true,
        'switch_case_semicolon_to_colon'                => true,
        'switch_case_space'                             => true,
        'switch_continue_to_break'                      => true,
        'ternary_operator_spaces'                       => true,
        'trim_array_spaces'                             => true,
        'unary_operator_spaces'                         => true,
        'no_spaces_inside_parenthesis'                  => true,
        'whitespace_after_comma_in_array'               => [
            'ensure_single_space' => true,
        ],
        'type_declaration_spaces' => [
            'elements' => [
                'function',
                'property',
            ],
        ],
        'trailing_comma_in_multiline' => [
            'after_heredoc' => false,
            'elements'      => ['arrays'],
        ],
        'single_space_after_construct' => [
            'constructs' => [
                'abstract',
                'as',
                'attribute',
                'break',
                'case',
                'catch',
                'class',
                'clone',
                'comment',
                'const',
                'const_import',
                'continue',
                'do',
                'echo',
                'else',
                'elseif',
                'enum',
                'extends',
                'final',
                'finally',
                'for',
                'foreach',
                'function',
                'function_import',
                'global',
                'goto',
                'if',
                'implements',
                'include',
                'include_once',
                'instanceof',
                'insteadof',
                'interface',
                'match',
                'named_argument',
                'namespace',
                'new',
                'open_tag_with_echo',
                'php_doc',
                'php_open',
                'print',
                'private',
                'protected',
                'public',
                'readonly',
                'require',
                'require_once',
                'return',
                'static',
                'switch',
                'throw',
                'trait',
                'try',
                'use',
                'use_lambda',
                'use_trait',
                'var',
                'while',
                'yield',
                'yield_from',
            ],
        ],
        'single_class_element_per_statement' => [
            'elements' => [
                'const',
                'property',
            ],
        ],
        'return_type_declaration' => [
            'space_before' => 'none',
        ],
        'phpdoc_types_order' => [
            'null_adjustment' => 'always_first',
        ],
        'phpdoc_add_missing_param_annotation' => [
            'only_untyped' => true,
        ],
        'phpdoc_order' => [
            'order' => [
                'param',
                'throws',
                'return',
            ],
        ],
        'phpdoc_scalar' => [
            'types' => [
                'boolean',
                'callback',
                'double',
                'integer',
                'real',
                'str',
            ],
        ],
        'phpdoc_separation' => [
            'groups' => [
                [
                    'deprecated',
                    'link',
                    'see',
                    'since',
                ],
                [
                    'author',
                    'copyright',
                    'license',
                ],
                [
                    'category',
                    'package',
                    'subpackage',
                ],
                [
                    'property',
                    'property-read',
                    'property-write',
                ],
                [
                    'param',
                    'return',
                ],
            ],
        ],
        'phpdoc_align' => [
            'align' => 'vertical',
            'tags'  => [
                'method',
                'param',
                'property',
                'throws',
                'type',
                'var',
                '<desc>',
                '@tag',
                'author',
                'created',
                '@author',
            ],
        ],
        'phpdoc_inline_tag_normalizer' => [
            'tags' => [
                'example',
                'id',
                'internal',
                'inheritdoc',
                'inheritdocs',
                'link',
                'source',
                'toc',
                'tutorial',
            ],
        ],
        'phpdoc_param_order' => true,
        'phpdoc_line_span'   => [
            'const'    => 'multi',
            'method'   => 'multi',
            'property' => 'multi',
        ],
        'no_trailing_comma_in_singleline' => [
            'elements' => [
                'arguments',
                'array_destructuring',
                'array',
                'group_import',
            ],
        ],
        'array_syntax'                => ['syntax' => 'short'],
        'class_attributes_separation' => ['elements' => ['method' => 'one']],
        'cast_spaces'                 => ['space' => 'single'],
        'single_line_comment_style'   => ['comment_types' => ['hash']],
        'concat_space'                => ['spacing' => 'one'],
        'no_extra_blank_lines'        => [
            'tokens' => [
                'attribute',
                'break',
                'case',
                'continue',
                'curly_brace_block',
                'default',
                'extra',
                'parenthesis_brace_block',
                'return',
                'square_brace_block',
                'switch',
                'throw',
                'use',
                'use_trait',
            ],
        ],
        'ordered_class_elements' => [
            'order' => [
                'use_trait',
                'case',
                'constant_public',
                'constant_protected',
                'constant_private',
                'property_public',
                'property_protected',
                'property_private',
                'construct',
                'destruct',
                'magic',
                'phpunit',
                'method_public',
                'method_protected',
                'method_private',
            ],
        ],
        'ordered_imports' => [
            'sort_algorithm' => 'length',
            'imports_order'  => [
                'const',
                'class',
                'function',
            ],
        ],
        'blank_line_before_statement' => [
            'statements' => ['break', 'continue', 'declare', 'return', 'throw', 'try', 'if'],
        ],
        'blank_lines_before_namespace' => [
            'max_line_breaks' => 2,
            'min_line_breaks' => 2,
        ],
        'binary_operator_spaces' => [
            'operators' => [
                '=>'  => 'align_single_space_minimal',
                '===' => 'align_single_space_minimal',
                '='   => 'align_single_space_minimal',
                'xor' => null,
                '+='  => 'align_single_space',
                '|'   => 'no_space',
            ],
        ],
        // 'braces' => [
        //     'allow_single_line_anonymous_class_with_empty_body' => false,
        //     'allow_single_line_closure'                         => false,
        //     'position_after_anonymous_constructs'               => 'next',
        //     'position_after_control_structures'                 => 'next',
        //     'position_after_functions_and_oop_constructs'       => 'next',
        // ],
        'visibility_required' => [
            'elements' => [
                'const',
                'method',
                'property',
            ],
        ],
        'single_space_around_construct' => [
            'constructs_contain_a_single_space'     => ['yield_from'],
            'constructs_followed_by_a_single_space' => [
                'abstract',
                'as',
                'attribute',
                'break',
                'case',
                'catch',
                'class',
                'clone',
                'comment',
                'const',
                'const_import',
                'continue',
                'do',
                'echo',
                'else',
                'elseif',
                'enum',
                'extends',
                'final',
                'finally',
                'for',
                'foreach',
                'function',
                'function_import',
                'global',
                'goto',
                'if',
                'implements',
                'include',
                'include_once',
                'instanceof',
                'insteadof',
                'interface',
                'match',
                'named_argument',
                'namespace',
                'new',
                'open_tag_with_echo',
                'php_doc',
                'php_open',
                'print',
                'private',
                'protected',
                'public',
                'readonly',
                'require',
                'require_once',
                'return',
                'static',
                'switch',
                'throw',
                'trait',
                'try',
                'type_colon',
                'use',
                'use_lambda',
                'use_trait',
                'var',
                'while',
                'yield',
                'yield_from',
            ],
            'constructs_preceded_by_a_single_space' => [
                'as',
                'use_lambda',
            ],
        ],
        'no_spaces_around_offset' => [
            'positions' => [
                'inside',
                'outside',
            ],
        ],
        'braces_position' => [
            'allow_single_line_anonymous_functions'     => true,
            'allow_single_line_empty_anonymous_classes' => true,
            'functions_opening_brace'                   => 'next_line_unless_newline_at_signature_end',
            'control_structures_opening_brace'          => 'same_line',
            'classes_opening_brace'                     => 'next_line_unless_newline_at_signature_end',
            'anonymous_functions_opening_brace'         => 'same_line',
            'anonymous_classes_opening_brace'           => 'same_line',
        ],
        // 'curly_braces_position' => [
        //     'allow_single_line_anonymous_functions' => true,
        //     'allow_single_line_empty_anonymous_classes' => true,
        //     'anonymous_classes_opening_brace' => 'same_line',
        //     'anonymous_functions_opening_brace' => 'same_line',
        //     'classes_opening_brace' => 'next_line_unless_newline_at_signature_end',
        //     'control_structures_opening_brace' => 'same_line',
        //     'functions_opening_brace' => 'next_line_unless_newline_at_signature_end',
        // ]
    ])
    ->setLineEnding("\n");
