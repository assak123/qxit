<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<h1> Update User</h1>

<form action="{{ url('/update') }}">
        <input type="hidden" name="id" value="{{ $edit_id->id}}"/>
    <div>
        <label>First Name:
            <input type="text" name="first_name" value="{{ $edit_id->first_name ?? '' }}"/>
        </label>
    </div>

    <div>
        <label>Middle Name: 
            <input type="text" name="middle_name" value="{{ $edit_id->middle_name ?? '' }}"/>
        </label>
    </div>
    
    <div>
        <label>Last Name: 
            <input type="text" name="last_name" value="{{ $edit_id->last_name ?? '' }}"/>
        </label>
    </div>
    
    <div>
        <label>Date of Birth: 
            <input type="date" name="birth_date" value="{{ $edit_id->birth_date ?? '' }}"/>
        </label>
    </div>

    <div>
        <label>Gender:
            <select name='gender'>
                <?php 
                    $gender_choices = ['Male', 'Female', 'Unknown'];
                ?>
                @foreach($gender_choices as $each)
                    @if($each == $edit_id->gender)
                        <option SELECTED value="{{$edit_id->gender}}">{{$edit_id->gender}}</option>
                    @else
                    <option  value="{{$edit_id->gender}}">{{$each}}</option>
                    @endif
                @endforeach
            </select> 
            
        </label>
    </div>

    <div>
        <label>Cellphone #: 
            <input type="number" name="cellphone_number" value="{{$edit_id->cellphone_no}}" />
        </label>
    </div>

    <div>
        <label>Address: 
            <input type="text" name="address" value="{{$edit_id->address}}"/>
        </label>
    </div>

    <div>
        <input type="submit" value="Submit" class="btn btn-primary"/>
    </div>
</form>

<form action="{{ url('/')}}">
    <input type="submit" value="Cancel" class="btn btn-warning"/>
</form>