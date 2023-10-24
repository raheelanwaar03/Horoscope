<div class="appBottomMenu" style="background-color: yellow !important;">
    <a href="{{ route('User.Dashboard') }}" class="item {{ request()->is('User/Dashboard ') ? 'active' : '' }}">
        <div class="col">
            <i class="fa fa-home" aria-hidden="true" style="color: red;font-size:20px"></i>
            <strong style="color: black;">Home</strong>
        </div>
    </a>
    <a href="{{ route('User.All.Plans') }}" class="item {{ request()->is('User/All/Plans') ? 'active' : '' }}">
        <div class="col">
            <i class="fa fa-television" aria-hidden="true" style="color: red;font-size:20px"></i>
            <strong style="color: black;">Plans</strong>
        </div>
    </a>
    <a href="{{ route('User.One.Rupee') }}" class="item {{ request()->is('User/One/Rupee') ? 'active' : '' }}">
        <div class="col">
            <i class="fa fa-usd" aria-hidden="true" style="color: red;font-size:20px"></i>
            <strong style="color: black;">Lucky Draw</strong>
        </div>
    </a>
    <a href="{{ route('User.Referral.Link') }}" class="item {{ request()->is('User/Referral/Link') ? 'active' : '' }}">
        <div class="col">
            <i class="fa fa-paper-plane-o" aria-hidden="true" style="color: red;font-size:20px"></i>
            <strong style="color: black;">Promotion</strong>
        </div>
    </a>
    <a href="#" data-toggle="modal" data-target="#model" class="item">
        <div class="col">
            <i class="fa fa-star-half-o" aria-hidden="true" style="color: red;font-size:20px"></i>
            <strong style="color: black;">Horoscope</strong>
        </div>
    </a>
    @if(auth()->user())
     <a href="{{ route('User.Picture.Page') }}" class="item {{ request()->is('User/Picture/Page') ? 'active' : '' }}">
        <div class="col">
            <i class="fa fa-map-o" aria-hidden="true" style="color: red;font-size:20px"></i>
            <strong style="color: black;">MarketPlace</strong>
        </div>
    </a>
    @endif
    <a href="{{ route('Images') }}" class="item {{ request()->is('User/Picture/Page') ? 'active' : '' }}">
        <div class="col">
            <i class="fa fa-map-o" aria-hidden="true" style="color: red;font-size:20px"></i>
            <strong style="color: black;">MarketPlace</strong>
        </div>
    </a>

    <a href="{{ route('User.Profile') }}" class="item {{ request()->is('User/Profile') ? 'active' : '' }}">
        <div class="col">
            <i class="fa fa-user" aria-hidden="true" style="color: red;font-size:20px"></i>
            <strong style="color: black;">Profile</strong>
        </div>
    </a>
</div>


<div class="modal fade" id="model" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">
                    See Horoscope according to your birth month
                </h4>
            </div>
            <div class="modal-body">
                <form action="{{ route('User.Date.of.Birth') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Select Month</label>
                        <select name="month" class="form-control">
                            <option value="January">January</option>
                            <option value="February">February</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="September">September</option>
                            <option value="October">October</option>
                            <option value="November">November</option>
                            <option value="December">December</option>
                        </select>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-warning">
                            submit
                        </button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close
                </button>
            </div>
        </div>
    </div>
</div>

<x-alert />


<script>
    $('#myModal').on('shown.bs.modal', function() {
        $('#myInput').trigger('focus')
    })
</script>

<script>
    function copyTrc20() {
        // Get the text field
        var copyText = document.getElementById("trcId");
        copyText.select();
        copyText.setSelectionRange(0, 99999);
        navigator.clipboard.writeText(copyText.value);
        // Alert the copied text
        alert("Trc20 Id Copied!");
    }
</script>

<script>
    function copyLink() {
        // Get the text field
        var copyText = document.getElementById("linkValue");
        copyText.select();
        copyText.setSelectionRange(0, 99999);
        navigator.clipboard.writeText(copyText.value);
        // Alert the copied text
        alert("Refer link Copied!");
    }
</script>

<!-- ========= JS Files =========  -->
<script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('assets/js/lib/bootstrap.bundle.min.js') }}"></script>
<!-- Ionicons -->
<script type="module" src="{{ asset('assets/js/ionicons.js') }}"></script>
<!-- Splide -->
<script src="{{ asset('assets/js/plugins/splide/splide.min.js') }}"></script>


</body>

</html>
