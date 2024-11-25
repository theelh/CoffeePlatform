<form method="POST" action="{{url('dashboard/insert_image')}}" enctype="multipart/form-data">
    @csrf
    <div>
        <div>
            <label >
                Enter a title
            </label>
            <div>
                <input type="text" name="user_name"/>
            </div>
        </div>
    </div>
    <div>
        <div>
            <label >
                select your post image
            </label>
            <div>
                <input type="file" name="user_image"/>
            </div>
        </div>
    </div>
    <div>
        <div>
            <label >
                Describe your post
            </label>
            <div>
                <input type="text" name="description"/>
            </div>
        </div>
    </div>
    <div>
        <div>
            <div class="gap-3 cursor-pointer">
                <input type="submit" name="dashboard" value="Submit"/>
            </div>
        </div>
    </div>
</form>