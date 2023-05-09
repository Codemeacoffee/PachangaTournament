import { Component, Input } from '@angular/core';

@Component({
  selector: 'google-maps',
  template: "<iframe class='w-100 h-100 border-0' [src]='url | safe'></iframe>"
})
export class GoogleMapsComponent {
    @Input() url: string = "";
}
