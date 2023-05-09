import { Component, Input } from '@angular/core';

@Component({
  selector: 'purple-arrow',
  templateUrl: './purple-arrow.component.html',
  styleUrls: ['./purple-arrow.component.css']
})
export class PurpleArrowComponent {
   @Input() title: string = "";
   @Input() content: string = "";
}
