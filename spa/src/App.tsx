import { createBrowserRouter, RouterProvider } from "react-router-dom";
import { LoginPage } from "./pages/LoginPage/LoginPage"
import { Dashboard } from "./pages/dashboard/dashboard";

function App() {

  const router = createBrowserRouter([
    {
      path: '/',
      element: <LoginPage/>
    },
    {
      path: '/dashboard',
      element: <Dashboard/>
    },
    // {
    //   path: '/',
    //   element: <LoginPage/>
    // },
  ]);
  return (
    <RouterProvider router={router}/>
  )
}

export default App
