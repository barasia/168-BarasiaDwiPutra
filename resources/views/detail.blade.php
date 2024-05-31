<div class="modal-body">

    <!-- name -->
    <div class="form-group row">
        <label class="col-sm-2 col-form-label text-md-right required">Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" placeholder="Name" value="{{ old('name') }}" required autofocus disabled>
            @if ($errors->has('name'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
            @endif
        </div>
    </div>
    
</div>

<script type="text/javascript">
    $(document).ready(function() {
        // select2
        // var select = document.getElementsByTagName("select");
        // Array.from(select).forEach(function(element) {
        //     var attr_ID = element.getAttribute("id");
        //     $('#' + attr_ID).select2({
        //         dropdownParent: $('#view-modal .modal-content')
        //     });
        // });
    });
</script>