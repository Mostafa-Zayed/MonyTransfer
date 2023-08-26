<div class="modal-dialog modal-xl">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="myExtraLargeModalLabel">{{__('website.create_transfer')}}</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            {!! Form::open(['url' => route('transfers.store'), 'method' => 'post' ]) !!}
            @csrf
            <div class="row">
                <div class="col-md-3">
                    <div class="mb-3">
                        {!! Form::label('from_city', __( 'website.from_city' ) . ' : *') !!}
                        {!! Form::text('from_city', null, ['class' => 'form-control', 'required', 'placeholder' => __( 'website.from_city' ) ]); !!}
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mb-3">
                        {!! Form::label('to_city', __( 'website.to_city' ) . ':*') !!}
                        {!! Form::text('to_city', null, ['class' => 'form-control', 'required', 'placeholder' => __( 'website.to_city' ) ]); !!}
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mb-3">
                        {!! Form::label('sender_name', __( 'website.sender_name' ) . ':*') !!}
                        {!! Form::text('sender_name', null, ['class' => 'form-control', 'required', 'placeholder' => __( 'website.sender_name' ) ]); !!}
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mb-3">
                        {!! Form::label('sender_phone', __( 'website.sender_phone' ) . ':*') !!}
                        {!! Form::text('name', null, ['class' => 'form-control', 'required', 'placeholder' => __( 'website.sender_phone' ) ]); !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                        {!! Form::label('recipient_name', __( 'website.recipient_name' ) . ':*') !!}
                        {!! Form::text('recipient_name', null, ['class' => 'form-control', 'required', 'placeholder' => __( 'website.recipient_name' ) ]); !!}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        {!! Form::label('recipient_phone', __( 'website.recipient_phone' ) . ':*') !!}
                        {!! Form::text('recipient_phone', null, ['class' => 'form-control', 'required', 'placeholder' => __( 'website.recipient_phone' ) ]); !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="mb-3">
                        {!! Form::label('from_office', __( 'website.from_office' ) . ':*') !!}
                        {!! Form::text('from_office', null, ['class' => 'form-control', 'required', 'placeholder' => __( 'website.from_office' ) ]); !!}
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mb-3">
                        {!! Form::label('to_office', __( 'website.to_office' ) . ':*') !!}
                        {!! Form::text('to_office', null, ['class' => 'form-control', 'required', 'placeholder' => __( 'website.to_office' ) ]); !!}
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mb-3">
                        {!! Form::label('office_commission', __('website.office_commission') . ':*') !!}
                        {!! Form::text('office_commission', null, ['class' => 'form-control', 'required', 'placeholder' =>__('website.office_commission')]); !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="mb-3">
                        {!! Form::label('transfer_value', __( 'website.transfer_value' ) . ':*') !!}
                        {!! Form::text('from_office', null, ['class' => 'form-control', 'required', 'placeholder' => __( 'website.transfer_value' ) ]); !!}
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mb-3">
                        {!! Form::label('transfer_value_require', __( 'website.transfer_value_require' ) . ':*') !!}
                        {!! Form::text('to_office', null, ['class' => 'form-control', 'required', 'placeholder' => __( 'website.to_office' ) ]); !!}
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mb-3">
                        {!! Form::label('transfer_commission', __('website.transfer_commission') . ':*') !!}
                        {!! Form::text('office_commission', null, ['class' => 'form-control', 'required', 'placeholder' => __('website.transfer_commission')]); !!}
                    </div>
                </div>
            </div>
            <div class="d-flex flex-wrap gap-2">
                <button type="submit" class="btn btn-primary waves-effect waves-light">{{__('website.create_transfer')}}</button>
            </div>
            {!! Form::close()!!}
        </div>
    </div><!-- /.modal-content -->
</div>