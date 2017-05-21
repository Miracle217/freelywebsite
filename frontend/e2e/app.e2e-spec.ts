import { FreelywebPage } from './app.po';

describe('freelyweb App', () => {
  let page: FreelywebPage;

  beforeEach(() => {
    page = new FreelywebPage();
  });

  it('should display message saying app works', () => {
    page.navigateTo();
    expect(page.getParagraphText()).toEqual('app works!');
  });
});
