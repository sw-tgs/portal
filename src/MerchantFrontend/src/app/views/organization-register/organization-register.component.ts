import { Component, OnInit } from '@angular/core';
import { environment } from "../../../environments/environment";

@Component({
  selector: 'portal-organization-register',
  templateUrl: './organization-register.component.html',
  styleUrls: ['./organization-register.component.scss']
})
export class OrganizationRegisterComponent implements OnInit {

  constructor() { }

  ngOnInit(): void {
    let dashboardElem = document.getElementById('hubspot-form');

    if (dashboardElem && dashboardElem.childElementCount === 0) {
      let hubspotScript = document.createElement('script');
      hubspotScript.innerHTML = `hbspt.forms.create({portalId: "6506294",formId: "e2d4a12e-a1c0-4ac0-87b5-ed89c490ecff"});`;
      dashboardElem.appendChild(hubspotScript);
    }

  }

}
