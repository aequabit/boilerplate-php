<?php

// Tested with PHP CS Fixer 1.11.8

$finder = Symfony\Component\Finder\Finder::create()
    ->in(__DIR__)
    ->name('*.php')
    ->notPath('bootstrap/cache')
    ->notPath('storage')
    ->notPath('vendor')
    ->notName('*.blade.php')
    ->ignoreDotFiles(true)
    ->ignoreVCS(true)
;

return Symfony\CS\Config\Config::create()
    ->level(Symfony\CS\FixerInterface::NONE_LEVEL)
    ->fixers([
        'phpdoc_params',

        // Ported from the StyleCI Laravel preset        
        'align_phpdoc',
        'binary_operator_spaces',
        'blank_line_after_namespace',
        'blank_line_after_opening_tag',
        'blank_line_before_return',
        'braces',
        'cast_spaces',
        'class_definition',
        'concat_without_spaces',
        'declare_equal_normalize',
        'elseif',
        'encoding',
        'full_opening_tag',
        'function_declaration',
        'function_typehint_space',
        'hash_to_slash_comment',
        'heredoc_to_nowdoc',
        'include',
        'indentation',
        'length_ordered_imports',
        'lowercase_cast',
        'lowercase_constants',
        'lowercase_keywords',
        'magic_constant_casing',
        'method_argument_space',
        'method_separation',
        'method_visibility_required',
        'native_function_casing',
        'no_alias_functions',
        'no_blank_lines_after_class_opening',
        'no_blank_lines_after_phpdoc',
        'no_blank_lines_after_throw',
        'no_blank_lines_between_imports',
        'no_blank_lines_between_traits',
        'no_closing_tag',
        'no_empty_phpdoc',
        'no_empty_statement',
        'no_extra_consecutive_blank_lines',
        'no_leading_import_slash',
        'no_leading_namespace_whitespace',
        'no_multiline_whitespace_around_double_arrow',
        'no_multiline_whitespace_before_semicolons',
        'no_short_bool_cast',
        'no_singleline_whitespace_before_semicolons',
        'no_spaces_after_function_name',
        'no_spaces_inside_offset',
        'no_spaces_inside_parenthesis',
        'no_trailing_comma_in_list_call',
        'no_trailing_comma_in_singleline_array',
        'no_trailing_whitespace',
        'no_trailing_whitespace_in_comment',
        'no_unneeded_control_parentheses',
        'no_unreachable_default_argument_value',
        'no_unused_imports',
        'no_useless_return',
        'no_whitespace_before_comma_in_array',
        'no_whitespace_in_blank_line',
        'normalize_index_brace',
        'not_operator_with_successor_space',
        'object_operator_without_whitespace',
        'phpdoc_indent',
        'phpdoc_inline_tag',
        'phpdoc_no_access',
        'phpdoc_no_package',
        'phpdoc_no_useless_inheritdoc',
        'phpdoc_scalar',
        'phpdoc_single_line_var_spacing',
        'phpdoc_summary',
        'phpdoc_to_comment',
        'phpdoc_trim',
        'phpdoc_type_to_var',
        'phpdoc_types',
        'phpdoc_var_without_name',
        'post_increment',
        'print_to_echo',
        'property_visibility_required',
        'psr4',
        'self_accessor',
        'short_array_syntax',
        'short_scalar_cast',
        'simplified_null_return',
        'single_blank_line_at_eof',
        'single_blank_line_before_namespace',
        'single_class_element_per_statement',
        'single_import_per_statement',
        'single_line_after_imports',
        'single_quote',
        'space_after_semicolon',
        'standardize_not_equals',
        'switch_case_semicolon_to_colon',
        'switch_case_space',
        'ternary_operator_spaces',
        'trailing_comma_in_multiline_array',
        'trim_array_spaces',
        'unalign_equals',
        'unary_operator_spaces',
        'unix_line_endings',
        'whitespace_after_comma_in_array'
    ])
    ->finder($finder)
    ->setUsingCache(false)
    ->setUsingLinter(true)
;