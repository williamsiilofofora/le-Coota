<div class="js-cookie-consent cookie-consent">

    <span class="cookie-consent__message">
        {!! trans('cookieConsent::texts.message') !!}
    </span>

    <button class="js-cookie-consent-agree cookie-consent__agree btn btn-alert">
        {{ trans('cookieConsent::texts.agree') }}
    </button>

    <button class="rgpd btn btn-success"><a href="{{route('rgpd.index')}}">en savoir plus</a> </button>

</div>
