<div class="form__element form__element_type_checkbox-group @if($error) form__element_error @endif {{$class}}">
    <label class="form__label">{{ $label }}</label>
    <div class="form__element-container">
        <input type="hidden" value="" name="{{ $elementName }}">
        @foreach ($options as $key => $label)
            <label>
                <input @foreach($attributes as $attributeName => $attributeValue) {{ $attributeName }}="{{ $attributeValue }}" @endforeach
                type="checkbox" value="{{ $key }}" @if(is_array($checked) && in_array($key, $checked)) checked="checked" @endif
                name="{{ $elementName }}[]">
                <span>
                    @if (isset($icon['class']))
                        <i class="{{$icon['class']}}"
                        @if(isset($icon['attributes']))
                            @foreach($icon['attributes'] as $iAttrName => $iAttrValue) {{ $iAttrName }}="{{ $iAttrValue }}" @endforeach
                        @endif>
                        </i>
                    @endif
                    {{ $label }}
                </span>
            </label>
        @endforeach
    </div>
    <div class="form__help">{{ $help }}</div>
    <div class="form__feedback">{{ $error }}</div>
</div>