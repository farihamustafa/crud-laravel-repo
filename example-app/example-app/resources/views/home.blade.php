<form  method="post" action="{{route('submitform')}}">
    @csrf
    <input type="text" name="name"/>
    <button type="submit">Submit</button>
</form>