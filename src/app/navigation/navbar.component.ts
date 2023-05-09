import { Component } from '@angular/core';

@Component({
  selector: 'navbar',
  templateUrl: './navbar.component.html',
  styleUrls: ['./navbar.component.css']
})
export class NavbarComponent {
  logo = {
    src : "assets/images/logo.png",
    alt: "Logo de Pachanga Tournament"
  }
}
