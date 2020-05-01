@section('sign_up_modal')
<!-- Button trigger modal -->
<button type="button" class="btn btn-light" data-toggle="modal" data-target="#Sign_up_modal">
  Log in
</button>

<!-- Modal -->
<div class="modal fade" id="Sign_up_modal" tabindex="-1" role="dialog" aria-labelledby="Sign_up_Modal_ID" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="Sign_up_Modal_ID">Sign up</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
@endsection