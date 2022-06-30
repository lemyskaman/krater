<table width="100%" class="items-table" cellspacing="0" border="0">
    <tr class="item-table-heading-row">
        <th width="2%" class="pr-20 text-right item-table-heading">#</th>
        <th width="40%" class="pl-0 text-left item-table-heading">@lang('pdf_items_label')</th>
        <th class="pr-20 text-right item-table-heading">@lang('pdf_quantity_label')</th>
        <th class="pr-20 text-right item-table-heading">@lang('pdf_price_label')</th>
        @if($invoice->discount_per_item === 'YES')
        <th class="pl-10 text-right item-table-heading">@lang('pdf_discount_label')</th>
        @endif
        @if($invoice->tax_per_item === 'YES')
        <th class="pl-10 text-right item-table-heading">@lang('pdf_tax_label')</th>
        @endif
        <th class="text-right item-table-heading">Total</th>
    </tr>
    @php
        $index = 1 ;
        $taxless_amount = 0;
        $amount_with_tax = 0;
    @endphp
    @foreach ($invoice->items as $item)
        <tr class="item-row">
            <td
                class="pr-20 text-right item-cell"
                style="vertical-align: top;"
            >
                {{$index}}
            </td>
            <td
                class="pl-0 text-left item-cell"
                style="vertical-align: top;"
            >
                <span>{{ $item->name }}</span><br>
                <span class="item-description">{!! nl2br(htmlspecialchars($item->description)) !!}</span>
            </td>
            @foreach($customFields as $field)
                <td class="text-right item-cell" style="vertical-align: top;">
                    {{ $item->getCustomFieldValueBySlug($field->slug) }}
                </td>
            @endforeach
            <td
                class="pr-20 text-center item-cell"
                style="vertical-align: top;"
            >
                {{$item->quantity}} @if($item->unit_name) {{$item->unit_name}} @endif
            </td>
            <td
                class="pr-20 text-right item-cell"
                style="vertical-align: top;"
            >
                {!! format_money_pdf($item->price, $invoice->customer->currency) !!}
            </td>

            @if($invoice->discount_per_item === 'YES')
                <td
                    class="pl-10 text-right item-cell"
                    style="vertical-align: top;"
                >
                    @if($item->discount_type === 'fixed')
                            {!! format_money_pdf($item->discount_val, $invoice->customer->currency) !!}
                        @endif
                        @if($item->discount_type === 'percentage')
                            {{$item->discount}}%
                        @endif
                </td>
            @endif

            @if($invoice->tax_per_item === 'YES')
                <td
                    class="pl-10 text-right item-cell"
                    style="vertical-align: top;"
                >
                    {!! format_money_pdf($item->tax, $invoice->customer->currency) !!}

                </td>
            @endif
            @php
                if ($item->tax == 0){
                    $taxless_amount += $item->total ;
                }else{
                    $amount_with_tax += $item->total;
                }
            @endphp
            <td
                class="text-right item-cell"
                style="vertical-align: top; width: "15%
            >
                {!! format_money_pdf($item->total, $invoice->customer->currency) !!}
            </td>
        </tr>
        @php
            $index += 1
        @endphp
    @endforeach
</table>

<hr class="item-cell-table-hr">
<div class="total-display-container">
    <table style="width: 100%;text-align: right">
        <tr  >
            <td style="text-align: left">

                <div style="font-size: 10px"> Operaciones en moneda extranjeras -Monto equivalente en Bolívares:<br>
                Tasa de cambio a la factura <b>{!! format_money_pdf($bcv_rate*100,$bcv_rate_currency)!!}</b> /  1 US $
                </div>
                 <table width="100%" cellspacing="0px" border="0"
                       class="total-display-table-ves @if(count($invoice->items) > 12) page-break @endif">

                     <tr>
                        <td class="border-0 total-table-attribute-label">@lang('pdf_subtotal')</td>
                        <td class="py-2 border-0 item-cell total-table-attribute-value2-ves">
                            {!! format_money_pdf($invoice->sub_total*$bcv_rate,$bcv_rate_currency) !!}
                        </td>
                    </tr>
                     <tr>
                        <td class="border-0 total-table-attribute-label">Monto Exento:</td>
                        <td class="py-2 border-0 item-cell total-table-attribute-value2-ves">
                            {!! format_money_pdf($taxless_amount*$bcv_rate,$bcv_rate_currency) !!}
                        </td>
                    </tr>
                     <tr>
                        <td class="border-0 total-table-attribute-label">Base Imponible:</td>
                        <td class="py-2 border-0 item-cell total-table-attribute-value2-ves">
                            {!! format_money_pdf($amount_with_tax*$bcv_rate,$bcv_rate_currency) !!}
                        </td>
                    </tr>
                    @if($invoice->discount > 0)
                        @if ($invoice->discount_per_item === 'NO')
                            <tr>
                                <td class="border-0 total-table-attribute-label">
                                    @if($invoice->discount_type === 'fixed')
                                        @lang('pdf_discount_label')
                                    @endif
                                    @if($invoice->discount_type === 'percentage')
                                        @lang('pdf_discount_label') ({{$invoice->discount}}%)
                                    @endif
                                </td>
                                <td class="py-2 border-0 item-cell total-table-attribute-value2-ves">
                                    @if($invoice->discount_type === 'fixed')
                                     {!! format_money_pdf($invoice->discount_val*$bcv_rate,$bcv_rate_currency) !!}
                                    @endif
                                    @if($invoice->discount_type === 'percentage')
                                       {{$item->discount}}%
                                    @endif
                                </td>
                            </tr>
                        @endif
                    @endif

                    @if ($invoice->tax_per_item === 'YES')
                        @foreach ($taxes as $tax)
                            <tr>
                                <td class="border-0 total-table-attribute-label">
                                    {{$tax->name.' ('.$tax->percent.'%)'}}
                                </td>
                                <td class="py-2 border-0 item-cell total-table-attribute-value2-ves">
                                   {!! format_money_pdf($tax->amount*$bcv_rate,$bcv_rate_currency) !!}
                                </td>
                            </tr>

                        @endforeach
                    @else
                        @foreach ($invoice->taxes as $tax)
                            <tr>
                                <td class="border-0 total-table-attribute-label">
                                    {{$tax->name.' ('.$tax->percent.'%)'}}
                                </td>
                                <td class="py-2 border-0 item-cell total-table-attribute-value2-ves">
                                   {!! format_money_pdf($tax->amount*$bcv_rate,$bcv_rate_currency) !!}
                                </td>
                            </tr>
                        @endforeach
                    @endif
                     <tr>
                        <td class="border-0 total-table-attribute-label">Total Facturado:</td>
                        <td class="py-2 border-0 item-cell total-table-attribute-value2-ves">
                            {!! format_money_pdf($invoice->total*$bcv_rate,$bcv_rate_currency) !!}
                        </td>
                    </tr>
                     <tr>
                        <td class="border-0 total-table-attribute-label">I.G.T.F. (3%):</td>
                        <td class="py-2 border-0 item-cell total-table-attribute-value2-ves">
                            {!! format_money_pdf($igtf_amount*$bcv_rate,$bcv_rate_currency) !!}
                        </td>
                    </tr>
                    <tr>
                        <td class="py-3"></td>
                        <td class="py-3"></td>
                    </tr>
                    <tr>
                        <td class="border-0 total-border-left total-table-attribute-label">
                            Total a Cancelar:
                        </td>
                        <td
                            class="py-8 border-0 total-border-right item-cell total-table-attribute-value2-ves"
                        >
                             {!! format_money_pdf(($invoice->total+$igtf_amount)*$bcv_rate, $bcv_rate_currency)!!}
                        </td>
                    </tr>
                </table>

            </td>

            <!-- TOTALES MONEDA DE CLIENTE -->

            <td>
                <table width="100%" cellspacing="0px" border="0"
                       class="total-display-table @if(count($invoice->items) > 12) page-break @endif">
                    <tr>
                        <td class="border-0 total-table-attribute-label">@lang('pdf_subtotal')</td>
                        <td class="py-2 border-0 item-cell total-table-attribute-value">
                            {!! format_money_pdf($invoice->sub_total, $invoice->customer->currency) !!}
                        </td>
                    </tr>
                    <tr>
                          <td class="border-0 total-table-attribute-label">
                              Monto Exento:
                          </td>
                          <td class="py-2 border-0 item-cell total-table-attribute-value">
                               {!! format_money_pdf($taxless_amount,$invoice->customer->currency) !!}
                          </td>
                    </tr>
                    <tr>
                        <td class="border-0 total-table-attribute-label">
                            Base Imponible:
                        </td>
                        <td class="py-2 border-0 item-cell total-table-attribute-value">
                            {!! format_money_pdf($amount_with_tax, $invoice->customer->currency)!!}
                        </td>
                    </tr>
                    @if($invoice->discount > 0)
                        @if ($invoice->discount_per_item === 'NO')
                            <tr>
                                <td class="border-0 total-table-attribute-label">
                                    @if($invoice->discount_type === 'fixed')
                                        @lang('pdf_discount_label')
                                    @endif
                                    @if($invoice->discount_type === 'percentage')
                                        @lang('pdf_discount_label') ({{$invoice->discount}}%)
                                    @endif
                                </td>
                                <td class="py-2 border-0 item-cell total-table-attribute-value">
                                    @if($invoice->discount_type === 'fixed')
                                        {!! format_money_pdf($invoice->discount_val, $invoice->customer->currency) !!}
                                    @endif
                                    @if($invoice->discount_type === 'percentage')
                                        {{$item->discount}}%
                                    @endif
                                </td>
                            </tr>
                        @endif
                    @endif

                    @if ($invoice->tax_per_item === 'YES')
                        @foreach ($taxes as $tax)
                            <tr>
                                <td class="border-0 total-table-attribute-label">
                                    {{$tax->name.' ('.$tax->percent.'%)'}}
                                </td>
                                <td class="py-2 border-0 item-cell total-table-attribute-value">
                                    {!! format_money_pdf($tax->amount, $invoice->customer->currency) !!}
                                </td>
                            </tr>
                        @endforeach
                    @else
                        @foreach ($invoice->taxes as $tax)
                            <tr>
                                <td class="border-0 total-table-attribute-label">
                                    {{$tax->name.' ('.$tax->percent.'%)'}}
                                </td>
                                <td class="py-2 border-0 item-cell total-table-attribute-value">
                                    {!! format_money_pdf($tax->amount, $invoice->customer->currency) !!}
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    <tr>
                        <td class="border-0 total-table-attribute-label">
                            Total Facturado:
                        </td>
                        <td class="py-2 border-0 item-cell total-table-attribute-value">
                            {!! format_money_pdf($invoice->total, $invoice->customer->currency)!!}
                        </td>
                    </tr>
                    <tr>
                        <td class="border-0 total-table-attribute-label">
                            I.G.T.F. (3%):
                        </td>
                        <td class="py-2 border-0 item-cell total-table-attribute-value">
                            {!! format_money_pdf($igtf_amount, $invoice->customer->currency)!!}
                        </td>
                    </tr>
                    <tr>
                        <td class="py-3"></td>
                        <td class="py-3"></td>
                    </tr>
                    <tr>
                        <td class="border-0 total-border-left total-table-attribute-label">
                            Total a Cancelar:
                        </td>
                        <td
                            class="py-8 border-0 total-border-right item-cell total-table-attribute-value2"

                        >
                            {!! format_money_pdf(($invoice->total+$igtf_amount), $invoice->customer->currency)!!}
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</div>
