<!-- Deleted insurance -->
<div class="modal fade" id="delete{{ $appointment->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-danger text-center" id="exampleModalLabel">
                    {{ trans('appointment_trans.delete_appointment') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('deleteAppointments', $appointment->id) }}" method="POST">
                    @method('delete')
                    @csrf
                    <input type="hidden" name="id" value="{{ $appointment->id }}">
                    <p class="mg-b-20">{{ $appointment->name }}</p>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                            data-dismiss="modal">{{ trans('appointment_trans.close') }}</button>
                        <button class="btn btn-danger">{{ trans('appointment_trans.delete') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
