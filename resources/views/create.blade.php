<div class="modal-body">

    <!-- name -->
    <div class="form-group row">
        <label class="col-sm-2 col-form-label text-md-right required">Problem</label>
        <div class="col-sm-10">
            <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
            @if ($errors->has('name'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
            @endif
        </div>
    </div>
    <br />
    <!-- image -->
    <div class="form-group row">
        <label class="col-sm-2 col-form-label text-md-right">Image</label>
        <div class="col-sm-10">
            <input type="file" class="form-control" name="files" accept="image/*" />
            @if ($errors->has('image'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('image') }}</strong>
            </span>
            @endif
        </div>
    </div>
    <br />
    <!-- file -->
    <div class="form-group row">
        <label class="col-sm-2 col-form-label text-md-right">File</label>
        <div class="col-sm-10">
            <input type="file" class="form-control" name="files" accept="application/pdf, .pps, .ppt, .pptx, application/vnd.ms-powerpoint, application/vnd.openxmlformats-officedocument.presentationml.slideshow, application/vnd.openxmlformats-officedocument.presentationml.presentation" />
            @if ($errors->has('file'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('file') }}</strong>
            </span>
            @endif
        </div>
    </div>
    <br />
    <!-- note -->
    <div class="form-group row">
        <label class="col-sm-2 col-form-label text-md-right">Note</label>
        <div class="col-sm-10">
            <textarea id="note" name="txtname" rows="4" cols="50" maxlength="200">
</textarea>
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