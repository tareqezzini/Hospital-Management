<!-- Modal -->
<div class="modal fade" id="delete{{ $receipt->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ trans('finance_trans.delete_receipt') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('Receipt.destroy', 'test') }}" method="post">
                {{ method_field('delete') }}
                {{ csrf_field() }}
                <div class="modal-body">
                    <input type="hidden" name="id" value="{{ $receipt->id }}">
                    <h5>{{ trans('Dashboard/sections_trans.Warning') }}<span style="color: red">
                            {{ $receipt->patients->name }}</span></h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        data-dismiss="modal">{{ trans('finance_trans.close') }}</button>
                    <button type="submit" class="btn btn-danger">{{ trans('finance_trans.delete') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
