<?php


/**
 * 
 * Appends to an multidimentional array
 * 
 * Given: 
 *  $array = [
 *               [pages]=>[
 *                   [test]=>12,
 *                   [test2]=>13
 *               ]
 *           ]
 *  
 *  array_append_deep($array,["pages","test3"],14)
 * 
 * Result:
 *  [
 *      [pages]=>[
 *          [test]=>12,
 *          [test2]=>13,
 *          [test3]=>14
 *      ]
 *  ]
 * 
 * 
 */
if (!!!function_exists('array_append_deep')) {
    function array_append_deep($array,$link,$element){
        // Recurstion end-case
        if (count($link) == 1){
            $array[fp_head($link)] = $element;
            return $array;
        }

        if(!!!array_key_exists(fp_head($link),$array)){
            $route_map[fp_head($link)] = array_append_deep(
                                            [],
                                            fp_tail($link),
                                            $element
                                        );

            return $route_map;
        }
        $route_map[fp_head($link)] = array_append_deep(
                                        $array[fp_head($link)],
                                        fp_tail($link),
                                        $element
                                    );
        return $route_map;
    }
}

/**
 * 
 * Can be used to get the value of an multidimentional array
 * 
 * Given: 
 *  $array = [
 *               [pages]=>[
 *                   [test]=>12,
 *                   [test2]=>13
 *               ]
 *           ]
 *  
 *  array_get_deep($array,["pages","test2"])
 * 
 * Result:
 *  13
 * 
 */
if (!!!function_exists('array_get_deep')) {
    function array_get_deep($array,$link){
        if(!!! isset($array[fp_head($link)])) return null;
        if(count($link) == 1)return $array[fp_head($link)];

        return array_get_deep($array[fp_head($link)],fp_tail($link));
    }
}