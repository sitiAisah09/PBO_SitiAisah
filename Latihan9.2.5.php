<?php
class comparator
{
    private $key;
    public function__construct(string $key)
    {
        $this->key = $key;
    }
    public function__invoke($a,$b)
    {
        return $a[$this->key] <=> $b[$this->key];
    }
}
$customers = [
    ['id' => 1, 'name' => 'John', 'credit' => 20000],
    ['id' => 3, 'name' => 'Alice', 'credit' => 10000],
    ['id' => 2, 'name' => 'Bob', 'credit' => 15000],
];

//sort customers by names
usort($customers, new comparator('name'));
print_r($customers);

//sort customers by credit
usort($customers, new comparator('credit'));
print_r($customers);
?>