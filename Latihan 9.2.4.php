<?php
class str 
{
    private static $methods = [
        'upper' => 'strtoupper',
         'lower' => 'strtolower',
          'len' => 'strlen'
    ];
    public static function__callstatic(string $method, array $parameters)
    {
        if (!array_key_exists($method, self::$methods)){
            throw new Exception('the'.$method.'is not supported');
        }
        return call_user_fanc_array(self::$methods[$method], $parameters);
    }
}
echo str::lower('Hello').'<br>';
echo str::upper('Hello').'<br>';
echo str::len('Hello').'<br>';
?>