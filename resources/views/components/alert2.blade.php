@props(['type' => 'info'])

@php
    switch($type) {
            case 'info':
                $class = 'p-4 mb-4 text-sm text-blue-700 bg-blue-100 rounded-lg';
                break;
            case 'danger':
                $class = 'p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg';
                break;
            case 'success':
                $class = 'p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg';
                break;
            case 'warning':
                $class = 'p-4 mb-4 text-sm text-yellow-700 bg-yellow-100 rounded-lg';
                break;
            case 'dark':
                $class = 'p-4 mb-4 text-sm text-dark-700 bg-dark-100 rounded-lg';
                break;
            default:
                $class = 'p-4 mb-4 text-sm text-blue-700 bg-blue-100 rounded-lg';
            break;
        }
    @endphp

<div {{$attributes->merge
    (['class' => $class])}} role="alert">
        @isset($title)
         <span class="font-medium">{{$title}}</span>
        @endisset
         {{ $slot }}.
      </div>