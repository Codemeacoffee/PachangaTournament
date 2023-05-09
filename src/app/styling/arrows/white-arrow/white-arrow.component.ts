import { Component, Input } from '@angular/core';

@Component({
  selector: 'white-arrow',
  templateUrl: './white-arrow.component.html',
  styleUrls: ['./white-arrow.component.css']
})
export class WhiteArrowComponent {
   @Input() title: string = "";
   @Input() content: string = "";
}
