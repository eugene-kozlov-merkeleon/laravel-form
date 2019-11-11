<div class="form__element form__element_type_checkbox @if($error) form__element_error @endif {{$class}}">
    <label class="form__label">
        @if (!$nullable)
            <input type="hidden" value="0" name="{{ $elementName }}">
        @endif
            <input @foreach($attributes as $attributeName => $attributeValue) {{ $attributeName }}="{{ $attributeValue }}" @endforeach
            type="checkbox" value="1" @if($checked) checked="checked" @endif name="{{ $elementName }}">
            <span>
                @if (isset($icon['class']))
                    <i class="{{$icon['class']}}"
                    @if(isset($icon['attributes']))
                            @foreach($icon['attributes'] as $iAttrName => $iAttrValue) {{ $iAttrName }}="{{ $iAttrValue }}" @endforeach
                    @endif>
                    </i>
                @endif
                {{ $label  }}
            </span>
            <div class="form__help">{{ $help }}</div>
            <div class="form__feedback">{{ $error }}</div>
    </label>
</div>