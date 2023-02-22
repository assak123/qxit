<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<h1>QXIT Activity</h1>


<form action="{{ url('/store') }}">
    <div>
        <label>First Name: 
            <input type="text" name="first_name" value=""/>
        </label>
    </div>

    <div>
        <label>Middle Name: 
            <input type="text" name="middle_name" value=""/>
        </label>
    </div>
    
    <div>
        <label>Last Name: 
            <input type="text" name="last_name" value=""/>
        </label>
    </div>
    
    <div>
        <label>Date of Birth: 
            <input type="date" name="birth_date" value=""/>
        </label>
    </div>

    <div>
        <label>Gender:
            <select name='gender'>
                <option>Male</option>
                <option>Female</option>
                <option>Unknown</option>
            </select> 
            
        </label>
    </div>

    <div>
        <label>Cellphone #: 
            <input type="number" name="cellphone_number" value=""/>
        </label>
    </div>

    <div>
        <label>Address: 
            <input type="text" name="address" value=""/>
        </label>
    </div>

    <div>
        <input type="submit" value="Submit" class="btn btn-primary"/>
    </div>
</form>



<table class="table">
    <tr>
        <th scope="col">First Name</th>
        <th scope="col">Middle Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Birthdate</th>
        <th scope="col">Gender</th>
        <th scope="col">Cellphone Number</th>
        <th scope="col">Address</th>
        <th scope="col"></th>
        <th scope="col"></th>
    </tr>

    @foreach($applicants as $each)
    <tr>
            <td>{{$each->first_name}}</td>
            <td>{{$each->middle_name}}</td>
            <td>{{$each->last_name}}</td>
            <td>{{$each->birth_date}}</td>
            <td>{{$each->gender}}</td>
            <td>{{$each->cellphone_no}}</td>
            <td>{{$each->address}}</td>

            <td>
                <form action="{{url('/edit')}}">
                    <input type='hidden' name='id' value="{{$each->id}}"/>
                    <input type='submit' value='Edit' class="btn btn-warning"/>
                </form>
            </td>

            <td>
                <form action="{{url('/delete')}}">
                    <input type='hidden' name='id' value="{{$each->id}}" />
                    <input type='submit' value='Delete' class="btn btn-danger"/>
                </form>
            </td>
            
        </tr>
        @endforeach

    
</table>


