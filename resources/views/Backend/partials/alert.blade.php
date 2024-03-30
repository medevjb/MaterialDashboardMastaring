@if ($message = Session::get('alert-success'))
    <div class="alert alert-success alert-dismissible text-white" role="alert">
                  <span class="text-sm">
                    {{ $message }}
                  </span>
        <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
@elseif($message = Session::get('alert-error'))
    <div class="alert alert-danger alert-dismissible text-white" role="alert">
                  <span class="text-sm">
                    {{ $message }}
                  </span>
        <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
@elseif($message = Session::get('alert-warning'))
    <div class="alert alert-warning alert-dismissible text-white" role="alert">
                  <span class="text-sm">
                    {{ $message }}
                  </span>
        <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
@endif


<div class="container mt-5">
    <button onclick="showAlert('Custom Success Message')" class="btn btn-primary">Show Alert</button>
</div>

<div id="alertDiv" class="alert alert-success alert-dismissible text-white" role="alert" style="display:none;">
    <span class="text-sm" id="alertMessage">
        <!-- Success message will be displayed here -->
    </span>
    <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>








