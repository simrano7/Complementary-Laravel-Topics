<h1>Category upload</h1>
{{Session::get("success")}}
<form method="post" action="{{route('category.store')}}">
    
    @csrf
    <!-- token -->
    <label>Category Name</label>
    <input name="category_name">
    <br>
    <label>Category Desc</label>
    <input name="description">
    <br>
    <button>Submit</button>
</form>