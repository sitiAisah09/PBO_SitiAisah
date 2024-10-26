<?php
class str 
{
    private $function = [
        'length' => 'strlen'
        'upper' => 'strtoupper' 
        'lower' => 'strolower'
        //map more method to function
    ];
    public function__construct(string $s)
    {
        $this->s = $s
    }
    public function__call($methdo, $args)
    {
        if (!in_array($method, array_keys($this->function))) {
            throw new BadMethodCallException();
        }
        array_unshift($args, $this->s);
        return call_user_func_array($this->function[$method], $args);
    }
}
$s = new str('Hello, world!');

echo $s->upper().'<br>';
echo $s->lower().'<br>';
echo $s->length().'<br>';
?>