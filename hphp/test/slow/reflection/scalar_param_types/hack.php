<?hh

function foo(int $bar, arraylike $baz) {
}
function herp(\hh\int $derp) {
}

<<__EntryPoint>>
function main_hack() {
;

$rp = new ReflectionParameter('foo', 'bar');
var_dump($rp->getClass());
var_dump($rp->getTypeHintText());

$rp = new ReflectionParameter('foo', 'baz');
var_dump($rp->getClass());
var_dump($rp->getTypeHintText());

herp(123);
$rp = new ReflectionParameter('herp', 'derp');
var_dump($rp->getClass());
var_dump($rp->getTypeHintText());
}
