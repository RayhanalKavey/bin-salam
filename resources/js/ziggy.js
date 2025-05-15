const Ziggy = {"url":"http:\/\/localhost","port":null,"defaults":{},"routes":{"dashboard.page":{"uri":"dashboard","methods":["GET","HEAD"]},"project.index":{"uri":"dashboard\/projects","methods":["GET","HEAD"]},"blog.index":{"uri":"dashboard\/services","methods":["GET","HEAD"]},"categories.index":{"uri":"dashboard\/categories","methods":["GET","HEAD"]},"categories.create":{"uri":"dashboard\/categories\/create","methods":["GET","HEAD"]},"storage.local":{"uri":"storage\/{path}","methods":["GET","HEAD"],"wheres":{"path":".*"},"parameters":["path"]}}};
if (typeof window !== 'undefined' && typeof window.Ziggy !== 'undefined') {
  Object.assign(Ziggy.routes, window.Ziggy.routes);
}
export { Ziggy };
