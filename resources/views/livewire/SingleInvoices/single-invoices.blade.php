<div>

    @if ($InvoiceSaved)
        <div class="alert alert-info">تم حفظ البيانات بنجاح.</div>
    @endif

    @if ($InvoiceUpdated)
        <div class="alert alert-info">تم تعديل البيانات بنجاح.</div>
    @endif

    @if ($show_table)
        @include('livewire.singleInvoices.table')
    @else
        @include('livewire.singleInvoices.Form')
    @endif


</div>
