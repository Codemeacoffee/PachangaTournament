import { Component } from '@angular/core';

@Component({
  selector: 'banner',
  templateUrl: './banner.component.html',
  styleUrls: ['./banner.component.css']
})
export class BannerComponent {
  bannerImg = {
    src : "assets/images/banner.jpg",
    alt: "Alt"
  }
}
