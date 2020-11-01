<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\LazyCollection;
use Illuminate\Support\Str;
use Log;
// use App\customer;
// use App\datatable;
// use App\employee;
class customer
{
    public function __construct($code)
    {
        $this->currency = $code;
    }
}
class MyController extends Controller
{
    public function index(){

        // Create Collection
            // $collection = collect([1, 2, 3]);
            // dd($collection);


        //Extending Collection
            // Collection::macro('toUpper', function () {
            //     return $this->map(function ($value) {
            //         return Str::upper($value);
            //     });
            // });
 
        // toUpper();
            // $collection = collect(['first', 'second']);
            // $upper = $collection->toUpper();
            // dd($upper);


        // Methods:
        // all();
            // $collection=collect([1, 2, 3])->all();
            // dd($collection);

        // avg();
            // $average = collect([['foo' => 10], ['foo' => 10], ['foo' => 20], ['foo' => 40]])->avg('foo');
            // dd($average);
            // $average = collect([1, 1, 2, 4])->avg();
            // dd($average);

        // chunk();
            // $collection = collect([1, 2, 3, 4, 5, 6, 7]);
            // $chunks = $collection->chunk(4);
            // dd($chunks);
            // $chunks->toArray(); // no effect of this line.
            // dd($chunks);

        // collapse();
            // $collection = collect([[1, 2, 3], [4, 5, 6], [7, 8, 9]]);
            // $collapsed = $collection->collapse();
            // dd($collapsed->all());

        // combine();
            // $collection = collect(['name', 'age']);
            // $combined = $collection->combine(['Bilal', 29]);       
            // dd($combined->all());

        // collect();
            // $collectionA = collect([1, 2, 3]);
            // $collectionB = $collectionA->collect();
            // dd($collectionB->all());

        // LazyCollection();
            // $lazyCollection = LazyCollection::make(function () {
            //     yield 1;
            //     yield 2;
            //     yield 3;
            // });
        
            // $collection = $lazyCollection->collect();       
            // get_class($collection);        
            // dd($collection->all());

        // concat();
            // $collection = collect(['Ahsan']);
            // $concatenated = $collection->concat(['Arslan'])->concat(['name' => 'Afras']);
            // dd($concatenated->all());

        //contain();
            // $collection = collect(['name' => 'Desk', 'price' => 100]);
            // dd($collection->contains('100'));
            // dd($collection->contains('New York'));

            // $collection = collect([
            //     ['product' => 'Desk', 'price' => 200],
            //     ['product' => 'Chair', 'price' => 100],
            // ]);
            // dd($collection->contains('product', 'Bookcase'));


            // $collection = collect([1, 2, 3, 4, 5]);
            // $a=$collection->contains(function ($value, $key) {
            //     return $value > 5;
            // });
            // dd($a);


        //  containsStrict();
            // $collection = collect(['name' => 'Desk', 'price' => '100']);
            // dd($collection->containsStrict('100')); // return true

            // $collection = collect(['name' => 'Desk', 'price' => 100]);
            // dd($collection->containsStrict('100')); // return false

            // dd($collection->containsStrict('Paris'));

        // count();
            // $collection = collect([1, 2, 3, 4]);
            // dd($collection->count());

        // countby();
            // $collection = collect([1, 2, 2, 2, 3]);
            // $counted = $collection->countBy();
            // dd($counted->all());
            
            // $collection = collect(['alice@gmail.com', 'bob@yahoo.com', 'carlos@gmail.com']);
            // $counted = $collection->countBy(function ($email) {
            //     return substr(strrchr($email, "@"), 1);
            // });
            // dd($counted->all());

        // crossJoin();
            // $collection = collect([1, 2]);
            // $matrix = $collection->crossJoin(['a', 'b']);
            // dd($matrix->all());

            // $collection = collect([1, 2]);
            // $matrix = $collection->crossJoin(['a', 'b'], ['I', 'II']);
            // dd($matrix->all());

        // dd();
            // $collection = collect(['John Doe', 'Jane Doe']);
            // $collection->dd();

        // diff();
            // $collection = collect([1, 2, 3, 4, 5]);
            // $diff = $collection->diff([2, 4, 6, 8]);      
            // dd($diff->all());

        // diffAssoc;
            // $collection = collect([
            //     'color' => 'orange',
            //     'type' => 'fruit',
            //     'remain' => 6,
            // ]);
            
            // $diff = $collection->diffAssoc([
            //     'color' => 'yellow',
            //     'type' => 'fruit',
            //     'remain' => 3,
            //     'used' => 6,
            // ]);
            
            // dd($diff->all());
        
        // diffKeys();
            // $collection = collect([
            //     'one' => 10,
            //     'two' => 20,
            //     'three' => 30,
            //     'four' => 40,
            //     'five' => 50,
            // ]);
            
            // $diff = $collection->diffKeys([
            //     'two' => 2,
            //     'four' => 4,
            //     'six' => 6,
            //     'eight' => 8,
            // ]);
            
            // dd($diff->all());
            
        // dump();
            // $collection = collect(['John Doe', 'Jane Doe']);
            // dd($collection->dump());

        // duplicates();
            // $collection = collect(['a', 'b', 'a', 'c', 'b']);
            // dd($collection->duplicates());

            // $employees = collect([
            //     ['email' => 'abigail@example.com', 'position' => 'Developer'],
            //     ['email' => 'james@example.com', 'position' => 'Designer'],
            //     ['email' => 'victoria@example.com', 'position' => 'Developer'],
            // ]);
            
            // dd($employees->duplicates('position'));

        // duplicatesStrict();
            // $collection = collect(['a', 'b', 'a', 'c', 'b']);
            //     dd($collection->duplicatesStrict());
            
            // $employees = collect([
            //     ['email' => 'abigail@example.com', 'position' => 'Developer'],
            //     ['email' => 'james@example.com', 'position' => 'Designer'],
            //     ['email' => 'victoria@example.com', 'position' => 'Developer'],
            // ]);
            // dd($employees->duplicatesStrict('position'));

        // each();
            //The each method iterates over the items in the collection and passes each item to a callback:
            // as each method is used in queue controller in order to send chunks of data.

        // eachSpread();

            // $collection = collect([['John Doe', 35,12], ['Jane Doe', 33,12]]);

            // $collection->eachSpread(function ($name, $month,$age) {

            //     echo $name.' '.$month.' '.$age.'<br>';

            // });

        // every();
            // collect([1, 2, 3, 4])->every(function ($value, $key) {
            //     return $value > 2;
            // });
            // dd($a);
            // $collection = collect([]);
            // $a=$collection->every(function ($value, $key) {
            //     return $value > 2;
            // });
            // dd($a);

        // except();
            // $collection = collect(['product_id' => 1, 'price' => 100, 'discount' => false]);
            // $filtered = $collection->except(['price', 'discount']);
            // dd($filtered->all());

        // filter();
            // $collection = collect([1, 2, 3, 4]);
            // $filtered = $collection->filter(function ($value, $key) {
            //     return $value > 2;
            // });
            // dd($filtered->all());
        
            // $collection = collect([0,0,0,0,01, 00020, 030, null, false, '0ABC', 0, []]);
            // dd($collection->filter()->all());  

        // first();
            // $collection=collect([1, 2, 3, 4])->first(function ($value, $key) {
            //     return $value > 2;
            // });
            // dd($collection);

            // $a=collect([1, 2, 3, 4])->first();
            // dd($a);

        // firstWhere();
            // $collection = collect([
            //     ['name' => 'Regena', 'age' => null],
            //     ['name' => 'Linda', 'age' => 14],
            //     ['name' => 'Diego', 'age' => 23],
            //     ['name' => 'Linda', 'age' => 84],
            // ]);
            // dd($collection->firstWhere('age', '>=', 18));
            // dd($collection->firstWhere('name', 'Linda'));
            // dd($collection->firstWhere('age'));
        
        
        //FlatMap Implementation
            // $collection = collect([
            //     ['name' => 'Sally'],
            //     ['school' => 'Arkansas'],
            //     ['age' => 28]
            // ]);
            
            // $flattened = $collection->flatMap(function ($values) {
            //     return array_map('strtoupper', $values);
            // });
            
            // dd($flattened->all());
            // // dd($collection);
            
        // flatten();
            // $collection = collect(['name' => 'taylor', 'languages' => ['php', 'javascript']]);
            // $flattened = $collection->flatten();
            // dd($flattened->all());

            // $collection = collect([
            //     'Apple' => [
            //         ['name' => 'iPhone 6S', 'brand' => 'Apple'],
            //     ],
            //     'Samsung' => [
            //         ['name' => 'Galaxy S7', 'brand' => 'Samsung'],
            //     ],
            // ]);
            
            // $products = $collection->flatten(1);
            
            // dd($products->values()->all());

        // flip();
            // $collection = collect(['name' => 'taylor', 'framework' => 'laravel']);
            // $flipped = $collection->flip();
            // dd($flipped->all());

        // forget();
            // $collection = collect(['name' => 'taylor', 'framework' => 'laravel']);
            // $collection->forget('name');
            // dd($collection->all());
        // forpage();

        // forpage();
            // $collection = collect([1, 2, 3, 4, 5, 6, 7, 8, 9]);
            // $chunk = $collection->forPage(2, 2); // first argument is the page number and second argument is
            //                                     // the number of values per page.  
            // dd($chunk->all());

        // get();
            // $collection = collect(['name' => 'taylor', 'framework' => 'laravel','email']);
            // $value = $collection->get('name');
            // dd($value);

            // $collection = collect(['name' => 'taylor', 'framework' => 'laravel']);
            // $value = $collection->get('foo', 'default-value');
            // dd($value);

            // $a=$collection->get('email', function () {
            //     return 'default-value';
            // });
            // dd($a);

        // groupBy();
            // $collection = collect([
            //     ['account_id' => 'account-x10', 'product' => 'Chair'],
            //     ['account_id' => 'account-x10', 'product' => 'Bookcase'],
            //     ['account_id' => 'account-x11', 'product' => 'Desk'],
            // ]);          
            // // $grouped = $collection->groupBy('account_id');           
            // // dd($grouped->toArray());

            // $grouped = $collection->groupBy(function ($item, $key) {
            //     return substr($item['account_id'], -3);
            // });
            // dd($grouped->toArray());

            // $data = new Collection([
            //     10 => ['user' => 1, 'skill' => 1, 'roles' => ['Role_1', 'Role_3']],
            //     20 => ['user' => 2, 'skill' => 1, 'roles' => ['Role_1', 'Role_2']],
            //     30 => ['user' => 3, 'skill' => 2, 'roles' => ['Role_1']],
            //     40 => ['user' => 4, 'skill' => 2, 'roles' => ['Role_2']],
            // ]);
            
            // $result = $data->groupBy([
            //     'skill',
            //     function ($item) {
            //         return $item['roles'];
            //     },
            // ], $preserveKeys = true);
            // dd($result);            

        // has();
            // $collection = collect(['account_id' => 1, 'product' => 'Desk', 'amount' => 5]);
            // dd($collection->has('product'));
            // dd($collection->has(['product', 'amount']));
            // dd($collection->has(['amount', 'hello']));

        // implode();
            // $collection = collect([
            //     ['account_id' => 1, 'product' => 'Desk'],
            //     ['account_id' => 2, 'product' => 'Chair'],
            // ]);
            // dd($collection->implode('product', ', '));
        
            // dd(collect([1, 2, 3, 4, 5])->implode('-'));

        // intersect();
            // $collection = collect(['Desk', 'Sofa', 'Chair']);
            // $intersect = $collection->intersect(['Desk', 'Chair', 'Bookcase']);      
            // dd($intersect->all());

        // intersectByKeys();
            // $collection = collect([
            //     'serial' => 'UX301', 'type' => 'screen', 'year' => 2009,
            // ]);
            // $intersect = $collection->intersectByKeys([
            //     'reference' => 'UX404', 'type' => 'tab', 'year' => 2011,
            // ]);
            // dd($intersect->all());

        // isEmpty();
            // $a=collect([])->isEmpty();
            // dd($a);

        // isNotEmpty();
            // $a=collect([])->isNotEmpty();
            // dd($a);

        // join();
            // $a=collect(['a', 'b', 'c'])->join(', '); 
            // // dd($a);
            // $a=collect(['a', 'b', 'c'])->join(', ', ', and ');
            // // dd($a);
            // $a=collect(['a', 'b'])->join(', ', ' and '); 
            // // dd($a);
            // $a=collect(['a'])->join(', ', ' and '); 
            // // dd($a);
            // $a=collect([])->join(', ', ' and ');
            // // dd($a);

        // keyBy();
            // $collection = collect([
            //     ['product_id' => 'prod-100', 'name' => 'Desk'],
            //     ['product_id' => 'prod-100', 'name' => 'pen'],
            //     ['product_id' => 'prod-200', 'name' => 'Chair'],
            // ]);
            // $keyed = $collection->keyBy('product_id');
            // dd($keyed->all());

            // $keyed = $collection->keyBy(function ($item) {
            //     return strtoupper($item['product_id']);
            // });
            
            // dd($keyed->all());

        // keys();
            // $collection = collect([
            //     'prod-100' => ['product_id' => 'prod-100', 'name' => 'Desk'],
            //     'prod-200' => ['product_id' => 'prod-200', 'name' => 'Chair'],
            // ]);
            
            // $keys = $collection->keys();
            
            // dd($keys->all());

        // last();
            // $a=collect([1, 2, 3, 4])->last(function ($value, $key) {
            //     return $value < 3;
            // });
            // dd($a);  

            // $a=collect([1, 2, 3, 4])->last();
            // dd($a);

        // map();
            // $collection = collect([1, 2, 3, 4, 5]);

            // $multiplied = $collection->map(function ($item, $key) {
            //     return $item * 2;
            // });
            
            // dd($multiplied->all());
        
        // mapInto();
        
            // $collection = collect(['1', '2', '3']);
            // $currencies = $collection->mapInto(customer::class);
            // echo $currencies;
            // dd($currencies->all());
        
        // mapSpread();
            // $collection = collect([0, 1, 2, 3, 4, 5, 6, 7, 8, 9]);
            // $chunks = $collection->chunk(2);
            // $sequence = $chunks->mapSpread(function ($even, $odd) {
            //     return $even + $odd;
            // });
            // dd($sequence->all());

        // mapToGroup();
            // $collection = collect([
            //     [
            //         'name' => 'John Doe',
            //         'department' => 'Sales',
            //     ],
            //     [
            //         'name' => 'Jane Doe',
            //         'department' => 'Sales',
            //     ],
            //     [
            //         'name' => 'Johnny Doe',
            //         'department' => 'Marketing',
            //     ]
            // ]);
            
            // $grouped = $collection->mapToGroups(function ($item, $key) {
            //     return [$item['department'] => $item['name']];
            // });
            
            // dd($grouped->toArray());

        // mapWithKeys();
            // $collection = collect([
            //     [
            //         'name' => 'John',
            //         'department' => 'Sales',
            //         'email' => 'john@example.com',
            //     ],
            //     [
            //         'name' => 'Jane',
            //         'department' => 'Marketing',
            //         'email' => 'jane@example.com',
            //     ]
            // ]);
            
            // $keyed = $collection->mapWithKeys(function ($item) {
            //     return [$item['email'] => $item['name']];
            // });
            
            // dd($keyed->all());

        // max();
            // $max = collect([['foo' => 10], ['foo' => 20]])->max('foo');
            // dd($max);

            // $max = collect([1, 2, 3, 4, 5])->max();
            // dd($max);

        // median();
            // $median = collect([['foo' => 10], ['foo' => 10], ['foo' => 20], ['foo' => 40]])->median('foo');
            // dd($median);

            // $median = collect([1, 1, 2, 4])->median();
            // dd($median);

        // merge();
            // $collection = collect(['product_id' => 1, 'price' => 100]);
            // $merged = $collection->merge(['price' => 200, 'discount' => false]);
            // dd($merged->all());

            // $collection = collect(['Desk', 'Chair']);
            // $merged = $collection->merge(['Bookcase', 'Door']);
            // dd($merged->all());

        // mergeRecursive();
            // $collection = collect(['product_id' => 1, 'price' => 100]);
            // $merged = $collection->mergeRecursive(['product_id' => 2, 'price' => 200, 'discount' => false]);
            // dd($merged->all());

        // min();
            // $min = collect([['foo' => 10], ['foo' => 20]])->min('foo');
            // dd($min);

            // $min = collect([1, 2, 3, 4, 5])->min();
            // dd($min);

        // mode();
            // $mode = collect([['foo' => 10], ['foo' => 10], ['foo' => 20], ['foo' => 40]])->mode('foo');
            // dd($mode);

            // $mode = collect([1, 1, 2, 4])->mode();
            // dd($mode);

        // nth();
            // $collection = collect(['a', 'b', 'c', 'd', 'e', 'f']);
            // dd($collection->nth(4));

        // only();
            // $collection = collect(['product_id' => 1, 'name' => 'Desk', 'price' => 100, 'discount' => false]);
            // $filtered = $collection->only(['product_id', 'name']);
            // dd($filtered->all());

        // pad();
            // $collection = collect(['A', 'B', 'C']);
            // $filtered = $collection->pad(5, 0);
            // dd($filtered->all());

            // $filtered = $collection->pad(-5, 0);
            // dd($filtered->all());

        // partition();
            // $collection = collect([1, 2, 3, 4, 5, 6]);
            // list($underThree, $equalOrAboveThree) = $collection->partition(function ($i) {
            //     return $i < 3;
            //     // return $i>=3;
            // });
            // // dd($underThree->all());

            // dd($equalOrAboveThree->all());

        // pipe();
            // $collection = collect([1, 2, 3]);
            // $piped = $collection->pipe(function ($collection) {
            //     return $collection->sum();
            // });
            // dd($piped);

        // pluck();
            // $collection = collect([
            //     ['product_id' => 'prod-100', 'name' => 'Desk'],
            //     ['product_id' => 'prod-200', 'name' => 'Chair'],
            // ]);
            // // $plucked = $collection->pluck('name');
            // // dd($plucked->all());

            // $plucked = $collection->pluck('name', 'product_id');
            // dd($plucked->all());

            // $collection = collect([
            //     [
            //         'speakers' => [
            //             'first_day' => ['Rosa', 'Judith'],
            //             'second_day' => ['Angela', 'Kathleen'],
            //         ],
            //     ],
            // ]);
            // $plucked = $collection->pluck('speakers.first_day');
            // dd($plucked->all());

            // $collection = collect([
            //     ['brand' => 'Tesla',  'color' => 'red'],
            //     ['brand' => 'Pagani', 'color' => 'white'],
            //     ['brand' => 'Tesla',  'color' => 'black'],
            //     ['brand' => 'Pagani', 'color' => 'orange'],
            // ]);
            // $plucked = $collection->pluck('color', 'brand');
            // dd($plucked->all());

        // pop();
            // $collection = collect([1, 2, 3, 4, 5]);
            // dd($collection->pop());
            // dd($collection->all());

        // prepend();
            // $collection = collect([1, 2, 3, 4, 5]);
            // dd($collection->prepend(0));
            // dd($collection->all());
            
            // $collection = collect(['one' => 1, 'two' => 2]);
            // dd($collection->prepend(0, 'zero'));
            // dd($collection->all());

        // pull();
            // $collection = collect(['product_id' => 'prod-100', 'name' => 'Desk']);
            // dd($collection->pull('name'));
            // dd($collection->all());

        // push();
            // $collection = collect([1, 2, 3, 4]);
            // dd($collection->push(5));
            // $collection->all();      

        // put();
            // $collection = collect(['product_id' => 1, 'name' => 'Desk']);
            // dd($collection->put('price', 100));
            // $collection->all();

        // random();
            // $collection = collect([1, 2, 3, 4, 5]);
            // dd($collection->random());

            // $random = $collection->random(3);

            // dd($random->all());

        // reduce();
            // $collection = collect([3, 2, 3]);

            // $total = $collection->reduce(function ($carry, $item) {
            //     return $carry + $item;
            // });
            // dd($total);

            // $a=$collection->reduce(function ($carry, $item) {
            //     return $carry + $item;
            // }, 5);
            // dd($a);

        // reject();
            // $collection = collect([1, 2, 3, 4]);
            // $filtered = $collection->reject(function ($value, $key) {
            //     return $value > 2;
            // });
            // dd($filtered->all());

        // replace();
            // $collection = collect(['Taylor', 'Abigail', 'James']);
            // $replaced = $collection->replace([1 => 'Victoria', 3 => 'Finn']);
            // dd($replaced->all());

        // replaceRecursive();
            // $collection = collect(['Taylor', 'Abigail', ['James', 'Victoria', 'Finn']]);
            // $replaced = $collection->replaceRecursive(['Charlie', 2 => [1 => 'King']]);
            // dd($replaced->all());

        // reverse();
            // $collection = collect(['a', 'b', 'c', 'd', 'e']);
            // $reversed = $collection->reverse();
            // dd($reversed->all());
        
        // search();
        //     $collection = collect([2, 4, 6, 8]);
        //     $index = $collection->search(4, true);
            // dd($index);
            // if($index)
            // {
            //    echo $collection[$index];
            // }
            // else{
            //     echo 'number not found';
            // }
            // dd($collection->search('4', true));
            // $a=$collection->search(function ($item, $key) {
            //     return $item > 5;
            // });
            // dd($a);

        // shift();
            // $collection = collect([1, 2, 3, 4, 5]);
            // dd($collection->shift());
            
            // dd($collection->all());

        // shuffle();
            // $collection = collect([1, 2, 3, 4, 5]);
            // $shuffled = $collection->shuffle();
            // dd($shuffled->all());

        // skip();
            // $collection = collect([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]);
            // $collection = $collection->skip(4);
            // dd($collection->all());

        // skipUntil();
            // $collection = collect([1, 2, 3, 4]);
            // $subset = $collection->skipUntil(function ($item) {
            //     return $item >= 3;
            // });
            // dd($subset->all());

        // skipWhile();
            // $collection = collect([1, 2, 3, 4]);
            // $subset = $collection->skipWhile(function ($item) {
            //     return $item <= 3;
            // });

            // dd($subset->all());

        // slice();
            // $collection = collect([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]);
            // $slice = $collection->slice(4);
            // dd($slice->all());

            // $slice = $collection->slice(4, 2);
            // dd($slice->all());

        // sort();
            // $collection = collect([5, 3, 1, 2, 4]);
            // $sorted = $collection->sort();
            // dd($sorted->values()->all());

        // sorBy();
            // $collection = collect([
            //     ['name' => 'Desk', 'price' => 200],
            //     ['name' => 'Chair', 'price' => 100],
            //     ['name' => 'Bookcase', 'price' => 150],
            // ]);
            // $sorted = $collection->sortBy('price');
            // dd($sorted->values()->all());
        
            // $collection = collect([
            //     ['name' => 'Desk', 'colors' => ['Black', 'Mahogany']],
            //     ['name' => 'Chair', 'colors' => ['Black']],
            //     ['name' => 'Bookcase', 'colors' => ['Red', 'Beige', 'Brown']],
            // ]);
            // $sorted = $collection->sortBy(function ($product, $key) {
            //     return count($product['colors']);
            // });
            // dd($sorted->values()->all());

        // sortDesc();
            // $collection = collect([5, 3, 1, 2, 4]);
            // $sorted = $collection->sortDesc();
            // dd($sorted->values()->all());

        // sortKeys();
            // $collection = collect([
            //     'id' => 22345,
            //     'first' => 'John',
            //     'last' => 'Doe',
            // ]);
            // $sorted = $collection->sortKeys();
            // dd($sorted->all());

        // splice();
            // $collection = collect([1, 2, 3, 4, 5]);
            // $chunk = $collection->splice(2);
            // dd($chunk->all());

            // dd($collection->all());

            // $collection = collect([1, 2, 3, 4, 5]);
            // $chunk = $collection->splice(2, 1);
            // dd($chunk->all());
             
            // $collection->all();

            // $collection = collect([1, 2, 3, 4, 5]);
            // $chunk = $collection->splice(2, 1, [10, 11]);
            // // dd($chunk->all());

            // dd($collection->all());

        // split();
            // $collection = collect([1, 2, 3, 4, 5]);
            // $groups = $collection->split(3);
            // dd($groups->toArray());

        // sum();
            // $a=collect([1, 2, 3, 4, 5])->sum();
            // dd($a);

            // $collection = collect([
            //     ['name' => 'JavaScript: The Good Parts', 'pages' => 176],
            //     ['name' => 'JavaScript: The Definitive Guide', 'pages' => 1096],
            // ]);
            // dd($collection->sum('pages'));

            // $collection = collect([
            //     ['name' => 'Chair', 'colors' => ['Black']],
            //     ['name' => 'Desk', 'colors' => ['Black', 'Mahogany']],
            //     ['name' => 'Bookcase', 'colors' => ['Red', 'Beige', 'Brown']],
            // ]);
            // $a=$collection->sum(function ($product) {
            //     return count($product['colors']);
            // });
            // dd($a);

        // take();
            // $collection = collect([0, 1, 2, 3, 4, 5]);
            // $chunk = $collection->take(3);
            // dd($chunk->all());

            // $collection = collect([0, 1, 2, 3, 4, 5]);
            // $chunk = $collection->take(-2);
            // dd($chunk->all());

        // takeUntil();
            // $collection = collect([1, 2, 3, 4]);
            // $subset = $collection->takeUntil(function ($item) {
            //     return $item >= 3;
            // });
            // dd($subset->all());
                
            // $collection = collect([1, 2, 3, 4]);
            // $subset = $collection->takeUntil(3);
            // dd($subset->all());

        // takeWhile();
            // $collection = collect([1, 2, 3, 4]);
            // $subset = $collection->takeWhile(function ($item) {
            //     return $item < 3;
            // });
            // dd($subset->all());

        // tap();
            // dd(collect([2, 4, 3, , 5])
            // ->sort()
            // ->tap(function ($collection) {
            // Log::debug('Values after sorting', $collection->values()->toArray());
            // })
            // ->shift());

        // times();
            // $collection = Collection::times(10, function ($number) {
            //     return $number * 9;
            // });
            // dd($collection->all());

            // $categories = Collection::times(3, function ($number) {
            //     return factory(Category::class)->create(['name' => "Category No. $number"]);
            // });
            // dd($categories->all());
            
        // toArray();
        //     $collection = collect(['name' => 'Desk', 'price' => 200]);
        //     dd($collection->toArray());

        // toJson();
            // $collection = collect(['name' => 'Desk', 'price' => 200]);
            // dd($collection->toJson());

        // transform();
            // $collection = collect([1, 2, 3, 4, 5]);
            // $collection->transform(function ($item, $key) {
            //     return $item * 2;
            // });
            // dd($collection->all());

        // union();
            // $collection = collect([1 => ['a'], 2 => ['b']]);
            // $union = $collection->union([3 => ['c'], 1 => ['b']]);
            // dd($union->all());

        // unique();
            // $collection = collect([1, 1, 2, 2, 3, 4, 2]);
            // $unique = $collection->unique();
            // dd($unique->values()->all());

            // $collection = collect([
            //     ['name' => 'iPhone 6', 'brand' => 'Apple', 'type' => 'phone'],
            //     ['name' => 'iPhone 5', 'brand' => 'Apple', 'type' => 'phone'],
            //     ['name' => 'Apple Watch', 'brand' => 'Apple', 'type' => 'watch'],
            //     ['name' => 'Galaxy S6', 'brand' => 'Samsung', 'type' => 'phone'],
            //     ['name' => 'Galaxy Gear', 'brand' => 'Samsung', 'type' => 'watch'],
            // ]);
            // // $unique = $collection->unique('brand');
            // // dd($unique->values()->all());

            // $unique = $collection->unique(function ($item) {
            //     return $item['brand'].$item['type'];
            // });
            // dd($unique->values()->all());

        // unless();
            // $collection = collect([1, 2, 3]);
            // $collection->unless(true, function ($collection) {
            //     return $collection->push(4);
            // });
            // $collection->unless(false, function ($collection) {
            //     return $collection->push(5);
            // });
            // dd($collection->all());

        // unwrap();
            // $a=Collection::unwrap(collect('John Doe'));
            // dd($a);

        // values();
            // $collection = collect([
            //     10 => ['product' => 'Desk', 'price' => 200],
            //     11 => ['product' => 'Desk', 'price' => 200],
            // ]);
            // $values = $collection->values();
            // dd($values->all());
        
        // when();
            // $collection = collect([1, 2, 3]);
            // $collection->when(true, function ($collection) {
            //     return $collection->push(4);
            // });
            // $collection->when(false, function ($collection) {
            //     return $collection->push(5);
            // });
            // dd($collection->all());

        // whenEmpty();
            // $collection = collect(['michael', 'tom']);
            // $collection->whenEmpty(function ($collection) {
            //     return $collection->push('adam');
            // });
            // dd($collection->all());

            // $collection = collect();
            // $collection->whenEmpty(function ($collection) {
            //     return $collection->push('adam');
            // });
            // $collection->all();

            // $collection = collect(['michael', 'tom']);
            // $collection->whenEmpty(function ($collection) {
            //     return $collection->push('adam');
            // }, function ($collection) {
            //     return $collection->push('taylor');
            // });
            // dd($collection->all());

        // whenNotEmpty();
            // $collection = collect(['michael', 'tom']);
            // $collection->whenNotEmpty(function ($collection) {
            //     return $collection->push('adam');
            // });
            // dd($collection->all());

            // $collection = collect();
            // $collection->whenNotEmpty(function ($collection) {
            //     return $collection->push('adam');
            // });
            // dd($collection->all());

            // $collection = collect();
            // $collection->whenNotEmpty(function ($collection) {
            //     return $collection->push('adam');
            // }, function ($collection) {
            //     return $collection->push('taylor');
            // });
            // dd($collection->all());

        // where();
            // $collection = collect([
            //     ['product' => 'Desk', 'price' => 200],
            //     ['product' => 'Chair', 'price' => 100],
            //     ['product' => 'Bookcase', 'price' => 150],
            //     ['product' => 'Door', 'price' => 100],
            // ]);
            // $filtered = $collection->where('price', 100);
            // dd($filtered->all());

            // $collection = collect([
            //     ['name' => 'Jim', 'deleted_at' => '2019-01-01 00:00:00'],
            //     ['name' => 'Sally', 'deleted_at' => '2019-01-02 00:00:00'],
            //     ['name' => 'Sue', 'deleted_at' => null],
            // ]);
            // $filtered = $collection->where('deleted_at', '!=', null);
            // dd($filtered->all());

        // whereBetween();
            // $collection = collect([
            //     ['product' => 'Desk', 'price' => 200],
            //     ['product' => 'Chair', 'price' => 80],
            //     ['product' => 'Bookcase', 'price' => 150],
            //     ['product' => 'Pencil', 'price' => 30],
            //     ['product' => 'Door', 'price' => 100],
            // ]);
            // $filtered = $collection->whereBetween('price', [100, 200]);
            // dd($filtered->all());

        // whereIn();
            // $collection = collect([
            //     ['product' => 'Desk', 'price' => 200],
            //     ['product' => 'Chair', 'price' => 100],
            //     ['product' => 'Bookcase', 'price' => 150],
            //     ['product' => 'Door', 'price' => 100],
            // ]);
            // $filtered = $collection->whereIn('price', [150, 200]);
            // dd($filtered->all());
        
        // whereNotBetween();
            // $collection = collect([
            //     ['product' => 'Desk', 'price' => 200],
            //     ['product' => 'Chair', 'price' => 80],
            //     ['product' => 'Bookcase', 'price' => 150],
            //     ['product' => 'Pencil', 'price' => 30],
            //     ['product' => 'Door', 'price' => 100],
            // ]);
            // $filtered = $collection->whereNotBetween('price', [100, 200]);
            // dd($filtered->all());

        // whereNotIn();
            // $collection = collect([
            //     ['product' => 'Desk', 'price' => 200],
            //     ['product' => 'Chair', 'price' => 100],
            //     ['product' => 'Bookcase', 'price' => 150],
            //     ['product' => 'Door', 'price' => 100],
            // ]);
            // $filtered = $collection->whereNotIn('price', [150, 200]);
            // dd($filtered->all());

        // whereNotNull();
            // $collection = collect([
            //     ['name' => 'Desk'],
            //     ['name' => null],
            //     ['name' => 'Bookcase'],
            // ]);
            // $filtered = $collection->whereNotNull('name');
            // dd($filtered->all());
        
        // whereNull();
            // $collection = collect([
            //     ['name' => 'Desk'],
            //     ['name' => null],
            //     ['name' => 'Bookcase'],
            // ]);
            // $filtered = $collection->whereNull('name');
            // dd($filtered->all());

        // wrap();
            // $collection = Collection::wrap('John Doe');
            // dd($collection->all());
        // zip();
            // $collection = collect(['Chair', 'Desk']);
            // $zipped = $collection->zip([100, 200]);
            // dd($zipped->all());




    }

}