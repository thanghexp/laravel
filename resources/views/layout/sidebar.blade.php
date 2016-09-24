<div id="sidebar">
    <div class="panel panel-primary">
        <div class="panel-heading">Search</div>
        <div class="panel-body">
            <div class="col-md-10">
                {!! Form::text('search', '', ['class' => 'form-control pull-left', 'placeholder' => 'Input Search .....']) !!}
            </div>
            <div class="col-md-2">
                {!! Form::button('OK', ['class' => 'btn btn-primary pull-right']) !!}
            </div>
        </div>
    </div>

    <ul class="list-group">
        <li class="list-group-item active">NOTE</li>
        <li class="list-group-item"><input type="checkbox" value=""> Xem demo</li>
        <li class="list-group-item"><input type="checkbox" value=""> Xem demo</li>
        <li class="list-group-item"><input type="checkbox" value=""> Xem demo</li>
        <li class="list-group-item"><input type="checkbox" value=""> Xem demo</li>
        <li class="list-group-item"><input type="checkbox" value=""> Xem demo</li>
        <li class="list-group-item"><input type="checkbox" value=""> Xem demo</li>
        <li class="list-group-item"><input type="checkbox" value=""> Xem demo</li>
        <li class="list-group-item"><input type="checkbox" value=""> Xem demo</li>
        <li class="list-group-item"><input type="checkbox" value=""> Xem demo</li>
        <li class="list-group-item"><input type="checkbox" value=""> Xem demo</li>
    </ul>

    <div class="box">
        <div class="header">NOTE</div>
        <div class="content"></div>
    </div>

    <div class="panel panel-primary">
        <div class="panel-heading">Calendar</div>
        <div class="panel-body">
            <div class="month">
                <ul>
                    <li class="prev">&#10094;</li>
                    <li class="next">&#10095;</li>
                    <li>
                        August<br>
                        <span style="font-size:18px">2016</span>
                    </li>
                </ul>
            </div>

            <ul class="weekdays">
                <li>Mo</li>
                <li>Tu</li>
                <li>We</li>
                <li>Th</li>
                <li>Fr</li>
                <li>Sa</li>
                <li>Su</li>
            </ul>

            <ul class="days">
                <li>1</li>
                <li>2</li>
                <li>3</li>
                <li>4</li>
                <li>5</li>
                <li>6</li>
                <li>7</li>
                <li>8</li>
                <li>9</li>
                <li><span class="active">10</span></li>
                <li>11</li>
                ...etc
            </ul>
        </div>
    </div>

    <marquee direction="down" width="250" height="200" behavior="alternate" style="border: 2px #337ab7 solid; background: #fff;">
        <marquee behavior="alternate">
            <img src="https://lh5.googleusercontent.com/-XCBcpXBoHJs/AAAAAAAAAAI/AAAAAAAAkbo/dsoKfg7GfB8/photo.jpg" with="50px" height="50px" alt="">
        </marquee>
    </marquee>


</div>
