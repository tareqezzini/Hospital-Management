<!-- Deleted insurance -->
<div class="modal fade" id="Deleted{{ $Patient->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ trans('patients_trans.delete_patient') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('Patients.destroy', 'test') }}" method="post">
                    @method('DELETE')
                    @csrf
                    <input type="hidden" name="id" value="{{ $Patient->id }}">
                    <div class="row">
                        <div class="col">
                            <p class="h5 text-danger"> {{ trans('patients_trans.want_delete_patient') }}</p>
                            <input type="text" class="form-control" readonly value="{{ $Patient->name }}">
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                            data-dismiss="modal">{{ trans('patients_trans.close') }}</button>
                        <button class="btn btn-danger">{{ trans('patients_trans.delete') }}<< /button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
