import { Injectable } from '@angular/core';
import { Http } from '@angular/http';
import { Observable } from 'rxjs/Observable';
import 'rxjs/add/operator/map';

import { environment } from '../../environments/environment';
import { Slide } from '../models/slide.model';

@Injectable()
export class HomeService {

  constructor(private http: Http) { }

  getSlides(): Observable<Slide[]> {
    return this.http.get(environment.apiURL+'slides')
      .map(response => response.json().data);

  }
}
