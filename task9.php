<?php
    function minNum( $list ){
        $minIndex = 0;
        $min = $list[ $minIndex ];
        $length = count( $list );

    for($i = 1; $i < $length; $i++){
        if( $list[ $i ] < $min ){
        $minIndex = $i;
        $min = $list[ $minIndex ];
    }
}
    return $minIndex;
}

    function selectionSort( $list ){
        $result = [];
        foreach($list as $val){
        $minIndex = minNum( $list );
        array_push( $result, $list[ $minIndex ] );
        array_splice( $list, $minIndex, 1 );
    }
return $result;
}

$sampleList = [ 11, 234, 59, 123, 224, 222 ];


echo '<pre>', print_r(selectionSort($sampleList)) ,'</pre>';