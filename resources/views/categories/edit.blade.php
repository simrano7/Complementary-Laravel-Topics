this is edit page
<!-- {{$category_data}} -->
<form method="post" action="{{route('category.update',$category_data->id)}}">
    @method("patch")
    @csrf
    <label>Name</label>
    <input name="category_name" value="{{$category_data->category_name}}">
    <br/>
    <label>Desc</label>
    <input name="description" value="{{$category_data->description}}">
    <br/>
    <button>Submit</button>
</form>