import {BrowserRouter as Router, Routes, Route, Outlet} from 'react-router-dom';

const Route = () => {
  return (
    <Router>
      <Routes>
        <Route path="/">
          <Route index element={<Home/>}/>
          <Route path="life" element={<Life/>}/>
          <Route path="profolios" element={<Profolios/>}/>
        </Route>
      </Routes>
    </Router>
  )
}

export default Route