import { Component, Input } from '@angular/core';

@Component({
  selector: 'section-container',
  templateUrl: './section-container.component.html',
  styles: ["section{ margin-bottom: 10rem; }"]
})
export class SectionContainer {
   @Input() section = {
        name: "",
        id: ""
   };
}
