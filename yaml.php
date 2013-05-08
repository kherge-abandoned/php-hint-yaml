<?php

/**
 * Let the emitter choose the style.
 */
define('YAML_ANY_SCALAR_STYLE', 0);

/**
 * The plain scalar style.
 */
define('YAML_PLAIN_SCALAR_STYLE', 1);

/**
 * The single-quoted scalar style.
 */
define('YAML_SINGLE_QUOTED_SCALAR_STYLE', 2);

/**
 * The double-quoted scalar style.
 */
define('YAML_DOUBLE_QUOTED_SCALAR_STYLE', 3);

/**
 * The literal scalar style.
 */
define('YAML_LITERAL_SCALAR_STYLE', 4);

/**
 * The folded scalar style.
 */
define('YAML_FOLDED_SCALAR_STYLE', 5);

/**
 * The tag @c !!null with the only possible value: @c null.
 */
define('YAML_NULL_TAG', 'tag:yaml.org,2002:null');

/**
 * The tag @c !!bool with the values: @c true and @c falce.
 */
define('YAML_BOOL_TAG', 'tag:yaml.org,2002:bool');

/**
 * The tag @c !!str for string values.
 */
define('YAML_STR_TAG', 'tag:yaml.org,2002:str');

/**
 * The tag @c !!int for integer values.
 */
define('YAML_INT_TAG', 'tag:yaml.org,2002:int');

/**
 * The tag @c !!float for float values.
 */
define('YAML_FLOAT_TAG', 'tag:yaml.org,2002:float');

/**
 * The tag @c !!timestamp for date and time values.
 */
define('YAML_TIMESTAMP_TAG', 'tag:yaml.org,2002:timestamp');

/**
 * The tag @c !!seq is used to denote sequences.
 */
define('YAML_SEQ_TAG', 'tag:yaml.org,2002:seq');

/**
 * The tag @c !!map is used to denote mapping.
 */
define('YAML_MAP_TAG', 'tag:yaml.org,2002:map');

define('YAML_PHP_TAG', '!php/object');
define('YAML_MERGE_TAG', 'tag:yaml.org,2002:merge');
define('YAML_BINARY_TAG', 'tag:yaml.org,2002:binary');

/**
 * Let the emitter choose an encoding.
 */
define('YAML_ANY_ENCODING', 0);

/**
 * Encode as UTF8.
 */
define('YAML_UTF8_ENCODING', 1);

/**
 * Encode as UTF16LE.
 */
define('YAML_UTF16LE_ENCODING', 2);

/**
 * Encode as UTF16BE.
 */
define('YAML_UTF16BE_ENCODING', 3);

/**
 * Let emitter choose linebreak character.
 */
define('YAML_ANY_BREAK', 0);

/**
 * Use \r as break character (Mac style).
 */
define('YAML_CR_BREAK', 1);

/**
 * Use \n as break character (Unix style).
 */
define('YAML_LN_BREAK', 2);

/**
 * Use \r\n as break character (DOS style).
 */
define('YAML_CRLN_BREAK', 3);

/**
 * Generate a YAML representation of the provided data.
 *
 * @param mixed   $data      The data being encoded. Can be any type except a
 *                           resource.
 * @param integer $encoding  Output character encoding chosen from
 *                           YAML_ANY_ENCODING, YAML_UTF8_ENCODING,
 *                           YAML_UTF16LE_ENCODING, YAML_UTF16BE_ENCODING.
 * @param integer $linebreak Output linebreak style chosen from YAML_ANY_BREAK,
 *                           YAML_CR_BREAK, YAML_LN_BREAK, YAML_CRLN_BREAK.
 * @param array   $callbacks Content handlers for emitting YAML nodes.
 *                           Associative array of classname => callable
 *                           mappings. See emit callbacks for more details.
 *
 * @return string Returns a YAML encoded string on success.
 */
function yaml_emit(
    $data,
    $encoding = YAML_ANY_ENCODING,
    $linebreak = YAML_ANY_BREAK,
    array $callbacks = array()
) {
}

/**
 * Generate a YAML representation of the provided data in the filename.
 *
 * @param string  $filename  Path to the file.
 * @param mixed   $data      The data being encoded. Can be any type except a
 *                           resource.
 * @param integer $encoding  Output character encoding chosen from
 *                           YAML_ANY_ENCODING, YAML_UTF8_ENCODING,
 *                           YAML_UTF16LE_ENCODING, YAML_UTF16BE_ENCODING.
 * @param integer $linebreak Output linebreak style chosen from YAML_ANY_BREAK,
 *                           YAML_CR_BREAK, YAML_LN_BREAK, YAML_CRLN_BREAK.
 * @param array   $callbacks Content handlers for emitting YAML nodes.
 *                           Associative array of classname => callable
 *                           mappings. See emit callbacks for more details.
 *
 * @return boolean Returns TRUE on success.
 */
function yaml_emit_file(
    $filename,
    $data,
    $encoding = YAML_ANY_ENCODING,
    $linebreak = YAML_ANY_BREAK,
    array $callbacks = array()
) {
}

/**
 * Convert all or part of a YAML document stream to a PHP variable.
 *
 * @param string  $input     The string to parse as a YAML document stream.
 * @param integer $pos       Document to extract from stream (-1 for all
 *                           documents, 0 for first document, ...).
 * @param integer &$ndocs    If ndocs is provided, then it is filled with the
 *                           number of documents found in stream.
 * @param array   $callbacks Content handlers for YAML nodes. Associative array
 *                           of YAML tag => callable mappings. See parse
 *                           callbacks for more details.
 *
 * @return mixed Returns the value encoded in input in appropriate PHP type or
 *               FALSE on failure. If pos is -1 an array will be returned with
 *               one entry for each document found in the stream.
 */
function yaml_parse(
    $input,
    $pos = 0,
    &$ndocs = null,
    array $callbacks = array()
) {
}

/**
 * Convert all or part of a YAML document stream read from a file to a PHP
 * variable.
 *
 * @param string  $filename  Path to the file.
 * @param integer $pos       Document to extract from stream (-1 for all
 *                           documents, 0 for first document, ...).
 * @param integer &$ndocs    If ndocs is provided, then it is filled with the
 *                           number of documents found in stream.
 * @param array   $callbacks Content handlers for YAML nodes. Associative array
 *                           of YAML tag => callable mappings. See parse
 *                           callbacks for more details.
 *
 * @return mixed Returns the value encoded in input in appropriate PHP type or
 *               FALSE on failure. If pos is -1 an array will be returned with
 *               one entry for each document found in the stream.
 */
function yaml_parse_file(
    $filename,
    $pos = 0,
    &$ndocs = null,
    array $callbacks = array()
) {
}

/**
 * Convert all or part of a YAML document stream read from a URL to a PHP
 * variable.
 *
 * @param string  $url       url should be of the form "scheme://...". PHP will
 *                           search for a protocol handler (also known as a
 *                           wrapper) for that scheme. If no wrappers for that
 *                           protocol are registered, PHP will emit a notice to
 *                           help you track potential problems in your script
 *                           and then continue as though filename specifies a
 *                           regular file.
 * @param integer $pos       Document to extract from stream (-1 for all
 *                           documents, 0 for first document, ...).
 * @param integer &$ndocs    If ndocs is provided, then it is filled with the
 *                           number of documents found in stream.
 * @param array   $callbacks Content handlers for YAML nodes. Associative array
 *                           of YAML tag => callable mappings. See parse
 *                           callbacks for more
 *
 * @return mixed Returns the value encoded in input in appropriate PHP type or
 *               FALSE on failure. If pos is -1 an array will be returned with
 *               one entry for each document found in the stream.
 */
function yaml_parse_url(
    $url,
    $pos = 0,
    &$ndocs = null,
    array $callbacks = array()
) {
}
