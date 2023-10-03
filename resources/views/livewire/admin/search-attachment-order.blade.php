<div class="row" id="cancel-row">
    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
        <div class="widget-content widget-content-area br-6">
            <div class="d-flex align-items-center justify-content-between">
                @can("order-create")
                    <a class="btn btn-primary add_attach" href="#!" data-id="{{ $order_id }}" href="#!"
                    data-toggle="modal" data-target="#loginModal1">@lang('admin.add_new_attach')</a>
                @endcan
                <form class="d-flex">
                    <input wire:model="name" value="{{ old('name') }}" placeholder="{{ __('admin.name') }}"
                        class="form-control me-2" type="search">
                </form>
            </div>
            <div class="table-responsive mb-4 mt-4">
                <table id="zero-config" class="table table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>@lang('admin.name')</th>
                            <th>@lang('admin.description')</th>
                            <th class="no-content">@lang('admin.download')</th>
                            <th class="no-content">@lang('admin.action')</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($attachment as $attachmen)
                            <tr id="{{ $attachmen->id }}">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $attachmen->name }}</td>
                                <td>
                                <?php echo nl2br(e($attachmen->description)); ?>   
                                </td>
                                <td>
                                    @can('download-file')
                                    @if ($attachmen->file!=null)
                                    <div class="d-flex align-items-center">
                                        @if(in_array(explode(".",$attachmen->file)[1],['png','jpg','webp','jpeg']))
                                        <a href="{{ route('admin.download', $attachmen->file) }}"><img
                                                style="width: 35px;height: 35px;"
                                                src="{{ asset('storage/images/orders/attachments/'.$attachmen->file) }}" /></a>
                                        @else
                                        <a href="{{ route('admin.download', $attachmen->file) }}"><img
                                                style="width: 35px;height: 35px;"
                                                src="{{ asset('assets/images/download/Download-Icon.png') }}" /></a>
                                        @endif
                                    </div>
                                    @endif
                                    @endcan
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        @can('attachment-delete')
                                        <button class="btn btn-danger deleteRecord mx-2"
                                        data-id="{{ $attachmen->id }}">@lang('admin.delete')</button>
                                        @endcan
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="row pb-4 pt-2">
                <div class="col-12">
                    {{ $attachment->links('general-components.admin.pagination') }}
                </div>
            </div>
        </div>
    </div>

</div>
