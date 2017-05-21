import { Component, OnInit, ElementRef, ViewChild } from '@angular/core';

import { Slide } from '../models/slide.model';
import { HomeService } from './home.service';
import { Observable } from 'rxjs/Observable';

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.scss']
})
export class HomeComponent implements OnInit {

  public slides:Slide[] = [];

  constructor( private service:HomeService) {
    this.getSlides();
  }

  ngOnInit() {
    
  }

  getSlides() {
    this.service.getSlides().subscribe(
    data => {      
      this.slides = data as Slide[];
      console.log(this.slides);
    });

    
  }
}
