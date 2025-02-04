hello test 

{{$name}}
{{-- you can not call a array using {{}} because larvel will use htmlspecialcahrs() but couse it is an array it will throw an error  --}}
{{implode(',', $books)}} 
<h1>Books</h1>
@foreach ($books as $book)
    <li>{{$book}}</li>
@endforeach  