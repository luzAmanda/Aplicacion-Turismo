{!! Form::open(array('url'=>'/usuario-sadmin','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}
    <label >
       <i   class="fa fa-search"></i>
    </label>
        <label>
            <div class="form-group">
                <input type="text" name="searchText" id="search" class="form-control"  value="{{$searchText}}" placeholder="Search.. " />
            </div>
        </label>


{{Form::close()}}