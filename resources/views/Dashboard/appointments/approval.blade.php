<!-- Deleted insurance -->
<div class="modal fade" id="approval{{ $appointment->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ trans('appointment_trans.confirm_appointment') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('confirmAppointments', $appointment->id) }}" method="POST">
                    @method('POST')
                    @csrf
                    <input type="hidden" name="id" value="{{ $appointment->id }}">
                    <p class="mg-b-20">{{ $appointment->name }}</p>
                    <!--div-->
                    <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="input-group col-md-12">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
                                        </div>
                                    </div><input class="form-control" name="appointment" id="datetimepicker"
                                        type="text" value="{{ date('Y-m-d H:i') }}">
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--/div-->

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                            data-dismiss="modal">{{ trans('appointment_trans.close') }}</button>
                        <button class="btn btn-success">{{ trans('appointment_trans.confirm') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
